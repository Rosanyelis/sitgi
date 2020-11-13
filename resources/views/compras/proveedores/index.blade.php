@extends('layout')
@section('contenido')
					<div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Proveedores</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Proveedores</li>
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
                                        <h1 class="m-b-10">Listado de Proveedores</h1>
                                    </div>
                                    <div class="col-sm-3">
                                        <ul class="text-center">
                                            <a href="{{ route('/proveedores/create') }}" class="btn btn-success btn-circle btn-lg" data-toggle="tooltip" data-original-title="Registrar Nuevo Proveedor"><i class="fa fa-plus" style="margin-top: 4px;"></i> </a>

                                            <a target="./blank" href="{{ route('proveedores-pdf') }}" class="btn btn-danger btn-circle btn-lg" data-toggle="tooltip" data-original-title="Imprimir Listado de Proveedores"><i class="fa fa-file-pdf-o" style="margin-top: 5px;"></i> </a>
                                        </ul>
                                    </div>
                                    
                                </div>

                                <br>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>RIF</th>
                                                <th>Proveedor</th>
                                                <th>Razon Social</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach ($proveedores as $proveedor)
                                            <tr>
                                                <td> {{ $proveedor->id }} </td>
                                                <td> {{ $proveedor->rif }} </td>
                                                <td> {{ $proveedor->nombre }} </td>
                                                <td> {{ $proveedor->razon_social }} </td>
                                                <td>
                                                    <a href="{{ route('/proveedores/show', $proveedor->id) }}" class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Ver más Información del Proveedor"> <i class="fa fa-eye text-inverse" data-toggle="modal" data-target=".informacion"></i> </a>

                                                    <a href="{{ route('/proveedores/edit/', $proveedor->id) }}" class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Editar Proveedor"> <i class="fa fa-pencil text-inverse"></i> </a>
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