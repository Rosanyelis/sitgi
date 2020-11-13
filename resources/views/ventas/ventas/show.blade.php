@extends('layout')
@section('contenido')

					<div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Ventas</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Ventas</li>
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
                                        <h1 class="m-b-10">Detalles de la Venta de Productos</h1>
                                    </div>
                                </div>
                                
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label class="control-label">Empresa:</label>
                                                <p>{{ $ventas->razon_social }}</p>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="control-label">RIF:</label>
                                                <p>{{ $ventas->rif }}</p>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Direccion:</label>
                                                <p>{{ $ventas->direccion }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Cliente:</label>
                                                <p>{{ $ventas->nombre }}</p>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Cédula:</label>
                                                <p>{{ $ventas->tipodocumento }}{{ $ventas->numdocumento }}  </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label class="control-label">Tipo de Comprobante:</label>
                                                <p>{{ $ventas->tipocomprobante }}</p>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="control-label">Número de Serie de Comprobante:</label>
                                                <p>{{ $ventas->seriecomprobante }}</p>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="control-label">Número de Comprobante:</label>
                                                <p>{{ $ventas->numcomprobante }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table id="detalles" class="table table-hover table-bordered table-striped ">
                                                    <thead style="background-color: #A9D0F5">
                                                        <tr>
                                                            <th>Productos</th>
                                                            <th>Cantidad</th>
                                                            <th>Precio de Venta</th>
                                                            <th>Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="3"><h4 class="text-rigth">TOTAL</h4></th>
                                                            <th><h4>Bs.S. {{ $ventas->totalventa }}</h4></th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        @foreach($detalles as $det)
                                                        <tr>
                                                            <td>{{ $det->producto }} </td>
                                                            <td>{{ $det->cantidad }} </td>
                                                            <td>{{ $det->precio_venta }} </td>
                                                            <td>{{ $det->cantidad*$det->precio_venta }} </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
@endsection