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
                            @include('compras.proveedores.fragments.info')
                            <div class="white-box">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h1 class="m-b-10">Listado de Ingresos</h1>
                                    </div>
                                    <div class="col-sm-3">
                                        <ul class="text-center">
                                            <a href="{{ route('/ingresos/create')}}" class="btn btn-success btn-circle btn-lg" data-toggle="tooltip" data-original-title="Registrar Nuevo Ingreso de Compras"><i class="fa fa-plus" style="margin-top: 4px;"></i> </a>

                                            <a target="./blank" href="{{ route('ingresos-pdf') }}" class="btn btn-danger btn-circle btn-lg" data-toggle="tooltip" data-original-title="Imprimir Listado de Ingresos"><i class="fa fa-file-pdf-o" style="margin-top: 5px;"></i> </a>
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
                                                <th>Proveedor</th>
                                                <th>Comprobante</th>
                                                <th>Impuesto</th>
                                                <th>Total</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach ($ingresos as $ingreso)
                                            <tr>
                                                <td> {{ $ingreso->id }} </td>
                                                <td> {{ $ingreso->fecha_hora }} </td>
                                                <td> {{ $ingreso->nombre }} </td>
                                                <td> {{ $ingreso->tipocomprobante }}: {{ $ingreso->seriecomprobante }} - {{ $ingreso->numcomprobante }}</td>
                                                <td> {{ $ingreso->impuesto }} </td>
                                                <td> {{ $ingreso->total }} </td>
                                                <td>
                                                    <a href=" {{ route('/ingresos/show', $ingreso->id) }} " class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Ver Más Detalles del Ingreso"> <i class="fa fa-eye text-inverse"></i> </a>
                                                    <a target="./blank" href=" {{ route('/ingresos/pdf', $ingreso->id) }} " class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Ver PDF de Más Detalles del Ingreso"> <i class="fa fa-file-pdf-o text-inverse"></i> </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
@endsection