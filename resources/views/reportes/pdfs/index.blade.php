@extends('layout')
@section('contenido')
					<div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Reportes PDF</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Reportes PDF</li>
                            </ol>
                        </div>
                        <!-- /.breadcrumb -->
                    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-sm-12">
                            @include('configuraciones.categorias.fragments.info')
                            <div class="white-box">
                            	<br>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h1 class="m-b-10">Listado de Reportes</h1>
                                    </div>
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre del Reporte</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            <tr>
                                                <td> Listado de Productos </td>
                                                <td> 
                                                    <a target="./blank" href="{{ route('productos-pdf') }}" class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Ver PDF de Más Detalles del Ingreso"> <i class="fa fa-file-pdf-o text-inverse"></i> </a> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Listado de Ventas </td>
                                                <td> 
                                                    <a target="./blank" href="{{ route('ventas-pdf') }}" class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Ver PDF de Más Detalles del Ingreso"> <i class="fa fa-file-pdf-o text-inverse"></i> </a> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Listado de Ingresos </td>
                                                <td> 
                                                    <a target="./blank" href="{{ route('ingresos-pdf') }}" class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Ver PDF de Más Detalles del Ingreso"> <i class="fa fa-file-pdf-o text-inverse"></i> </a> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Listado de Clientes </td>
                                                <td> 
                                                    <a target="./blank" href="{{ route('clientes-pdf') }}" class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Ver PDF de Más Detalles del Ingreso"> <i class="fa fa-file-pdf-o text-inverse"></i> </a> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Listado de Proveedores </td>
                                                <td> 
                                                    <a target="./blank" href="{{ route('proveedores-pdf') }}" class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Ver PDF de Más Detalles del Ingreso"> <i class="fa fa-file-pdf-o text-inverse"></i> </a> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Listado de Inventario General </td>
                                                <td> 
                                                    <a target="./blank" href="{{ route('inventario-pdf') }}" class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Ver PDF de Más Detalles del Ingreso"> <i class="fa fa-file-pdf-o text-inverse"></i> </a> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Listado de Categorias </td>
                                                <td> 
                                                    <a target="./blank" href="{{ route('categoria-pdf') }}" class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Ver PDF de Más Detalles del Ingreso"> <i class="fa fa-file-pdf-o text-inverse"></i> </a> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Listado de Marcas </td>
                                                <td> 
                                                    <a target="./blank" href="{{ route('marcas-pdf') }}" class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Ver PDF de Más Detalles del Ingreso"> <i class="fa fa-file-pdf-o text-inverse"></i> </a> 
                                                </td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


@endsection

