@extends('layout')
@section('contenido')

					<div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Ingresos</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Ingresos</li>
                            </ol>
                        </div>
                        <!-- /.breadcrumb -->
                    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                            	<br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h1 class="m-b-10">Registrar el Ingreso de Productos</h1>
                                        @if (count($errors) > 0)
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <form action="{{ route('/ingresos/store')}}" method="POST" >
                                    <div class="modal-body">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Proveedor:</label>
                                                <select name="id_proveedor" class="form-control select2 col-12" required="">
                                                    <option selected>Seleccione el proveedor..</option>
                                                    @foreach($proveedores as $proveedor)
                                                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }} - {{ $proveedor->razon_social }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label class="control-label">Tipo de Comprobante:</label>
                                                <select name="tipocomprobante" class="form-control col-12" required>
                                                    <option selected>Seleccione el tipo de comprobante..</option>
                                                    <option value="Factura">Factura</option>
                                                    <option value="Boleta">Boleta</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="control-label">Número de Serie de Comprobante:</label>
                                                <input type="text" name="seriecomprobante" class="form-control" placeholder="00012" pattern="[0-9]{10}" maxlength="10" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="control-label">Número de Comprobante:</label>
                                                <input type="text" name="numcomprobante" class="form-control" placeholder="00023" pattern="[0-9]{10}" maxlength="10"  required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label class="control-label">Productos:</label>
                                                <select name="id_producto" class="form-control select2 col-12" id="pid_producto">
                                                    <option >Seleccione un producto...</option>
                                                    @foreach($productos as $producto)
                                                        <option value="{{ $producto->id }}">{{ $producto->producto }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                             <div class="form-group col-md-2">
                                                <label class="control-label">Nro. de Lote:</label>
                                                <input type="text" name="lote" class="form-control" placeholder="ZW432" id="plote" >
                                            </div>
                                            <div class="form-group col-md-1">
                                                <label class="control-label">Cantidad:</label>
                                                <input type="number" name="cantidad" class="form-control" placeholder="20" id="pcantidad" >
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label class="control-label">Precio de Costo:</label>
                                                <input type="number" name="precio_costo" class="form-control" placeholder="20000" id="pprecio_costo" >
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label class="control-label">Precio de Venta:</label>
                                                <input type="number" name="precio_venta" class="form-control" id="pprecio_venta"  >
                                            </div>
                                            <div class="form-group col-md-2 text-center">
                                                <button type="button" class="btn btn-default btn-rounded mt-5" id="bt_agg" data-toggle="tooltip" data-original-title="Agregar Producto al Detalle de Ingreso"><i class="fa fa-plus" ></i> Agregar</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table id="detalles" class="table table-hover table-bordered table-striped ">
                                                    <thead style="background-color: #A9D0F5">
                                                        <tr>
                                                            <th>Lote</th>
                                                            <th>Productos</th>
                                                            <th>Cantidad</th>
                                                            <th>Precio de Costo</th>
                                                            <th>Precio de Venta</th>
                                                            <th>Subtotal</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="5"><h4 class="text-rigth">TOTAL</h4></th>
                                                            <th><h4 id="total">Bs.S. 0.00</h4></th>
                                                            <th></th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                    
                                        <div class="modal-footer">
                                            <button type="submit" id="guardar" class="btn btn-success waves-effect waves-light"><i class="fa fa-save"></i> Guardar</button>
                                            <button type="reset" class="btn btn-danger waves-effect waves-light"><i class="fa fa-eraser"></i> Limpiar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
@push('scripts')
    <script type="text/javascript">
        //con esta funcion inicial capturamos el evento que realiza el click para cargar los 
        //datos a la tabla para el proceso de ingreso de productos
        $(document).ready(function(){
            $('#bt_agg').click(function(){
                agregar();
            });
        });

        //inicializamos unas variables para poder usarlas en los otros metodos
        var cont=0;
        total=0;
        subtotal=[];

        //esto hara que el boton con este id este oculto si no ha cargado datos
        //a la tabla
        $('#guardar').hide();

        function agregar(){

            lote=$('#plote').val();
            id_producto=$('#pid_producto').val();
            producto=$('#pid_producto option:selected').text();
            cantidad=$('#pcantidad').val();
            precio_costo=$('#pprecio_costo').val();
            precio_venta=$('#pprecio_venta').val();

            if (lote!="" && id_producto!="" && cantidad!="" && cantidad > 0 && precio_costo!=""  && precio_venta!="" ) {

                subtotal[cont]=(cantidad*precio_costo);
                total=total+subtotal[cont];


                var fila='<tr class="selected" id="fila'+cont+'"><td><input type="hidden" name="lote[]" value="'+lote+'">'+lote+'</td><td><input type="hidden" name="id_producto[]" value="'+id_producto+'" >'+producto+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td><td><input type="number" name="precio_costo[]" value="'+precio_costo+'"></td><td><input type="number" name="precio_venta[]" value="'+precio_venta+'" ></td><td>'+subtotal[cont]+'</td><td><button class="btn btn-default btn-rounded" onclick="eliminar('+cont+');" data-toggle="tooltip" data-original-title="Eliminar Producto"> <i class="fa fa-times text-inverse"></i></button></td></tr>';

                cont++;
                limpiar();

                $('#total').html('Bs.S.'+ total);

                evaluar();
                

                $('#detalles').append(fila);
            }
            else{
                alert('Error al ingresar el detalle del Ingreso, revise los datos del artículo');
            }
        }

        function limpiar(){

            $('#pid_producto').val("");
            $('#plote').val("");
            $('#pcantidad').val(""); 
            $('#pprecio_costo').val("");
            $('#pprecio_venta').val("");
        }


        function evaluar(){

            if(total > 0){

                $('#guardar').show();
            }
            else{

                $('#guardar').hide();
            }

        }

        function eliminar(index){

            total=total-subtotal[index];
            $('#total').html('Bs.S'+ total);
            $('#fila' + index).remove();
            evaluar();

        }

    </script>
@endpush
@endsection