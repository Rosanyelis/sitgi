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
                            @include('compras.proveedores.fragments.info')
                            <div class="white-box">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h1 class="m-b-10">Listado de Ventas</h1>
                                    </div>
                                    <div class="col-sm-3">
                                        <ul class="text-center">
                                            <a href="{{ route('/ventas/create')}}" class="btn btn-success btn-circle btn-lg" data-toggle="tooltip" data-original-title="Registrar Nueva Venta"><i class="fa fa-plus" style="margin-top: 5px;"></i> </a>

                                            <a target="./blank" href="{{ route('ventas-pdf')}}" class="btn btn-danger btn-circle btn-lg" data-toggle="tooltip" data-original-title="Imprimir Listado de Ventas"><i class="fa fa-file-pdf-o" style="margin-top: 5px;"></i> </a>
                                        </ul>
                                    </div>
                                    
                                </div>

                                <br>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Fecha</th>
                                                <th>Cliente</th>
                                                <th>Comprobante</th>
                                                <th>Impuesto</th>
                                                <th>Total Venta</th>
                                                <th>Estatus</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach ($ventas as $venta)
                                            <tr>
                                                <td> {{ $venta->id }} </td>
                                                <td> {{ $venta->fecha_hora }} </td>
                                                <td> {{ $venta->nombre }} </td>
                                                <td> {{ $venta->tipocomprobante }}: {{ $venta->seriecomprobante }} - {{ $venta->numcomprobante }}</td>
                                                <td> {{ $venta->impuesto }} </td>
                                                <td> {{ $venta->totalventa }} </td>
                                                <td> 
                                                    @if($venta->estatus == 1)
                                                    <span class="label label-success">Procesada</span>
                                                    @else
                                                    <span class="label label-danger">Anulada</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href=" {{ route('/ventas/show',$venta->id) }} " class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Ver Más Detalles de la Venta"> <i class="fa fa-eye text-inverse"></i> </a>
                                                    <a data-toggle="modal" data-target="#modal-delete-{{ $venta->id }}"><button class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Anular Venta"> <i class="fa fa-times text-inverse"></i> </button></a>
                                                </td>
                                            </tr>

                                            <!-- /.modal -->
                                            <div id="modal-delete-{{ $venta->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form action="{{ route('/ventas/destroy/',$venta->id) }}" method="POST">
                                                        @csrf
                                                            <input type="hidden" name="_method" value="DELETE">

                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h3 class="modal-title">Anular Venta</h3>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h4>Estás Seguro de Anular la Venta?</h4>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                                                                <button type="submit" class="btn btn-danger waves-effect waves-light">Eliminar</button>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
@endsection