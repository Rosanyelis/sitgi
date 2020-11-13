@extends('layout')
@section('contenido')
					<div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Clientes</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Clientes</li>
                            </ol>
                        </div>
                        <!-- /.breadcrumb -->
                    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-sm-12">
                            @include('ventas.clientes.fragments.info')
                            <div class="white-box">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h1 class="m-b-10">Listado de Clientes</h1>
                                    </div>
                                    <div class="col-sm-3">
                                        <ul class="text-center">
                                            <a href=" {{ route('/clientes/create') }} " class="btn btn-success btn-circle btn-lg" data-toggle="tooltip" data-original-title="Registrar Nuevo Clientes"><i class="fa fa-plus" style="margin-top: 5px;"></i> </a>

                                            <a target="./blank" href="{{ route('clientes-pdf') }}" class="btn btn-danger btn-circle btn-lg" data-toggle="tooltip" data-original-title="Imprimir Listado de Clientes"><i class="fa fa-file-pdf-o" style="margin-top: 5px;"></i> </a>
                                        </ul>
                                    </div>
                                    
                                </div>

                                <br>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <tr>
                                                <th>#</th>
                                                <th>Cédula</th>
                                                <th>Cliente</th>
                                                <th>Dirección</th>
                                                <th>Teléfono</th>
                                                <th>Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach ($clientes as $cliente)
                                            <tr>
                                                <td> {{ $cliente->id }} </td>
                                                <td> {{ $cliente->tipodocumento }}{{ $cliente->numdocumento }} </td>
                                                <td> {{ $cliente->nombre }} </td>
                                                <td> {{ $cliente->direccion }} </td>
                                                <td> {{ $cliente->telefono }} </td>
                                                <td>
                                                    <a href="{{ route('/clientes/edit/', $cliente->id) }}" class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Editar Cliente"> <i class="fa fa-pencil text-inverse" data-toggle="modal" data-target=".modal2"></i> </a >
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