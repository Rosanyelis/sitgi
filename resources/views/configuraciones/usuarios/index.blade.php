@extends('layout')
@section('contenido')
					<div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Usuarios</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Usuarios</li>
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
                                        <h1 class="m-b-10">Listado de Usuarios</h1>
                                    </div>
                                    <div class="col-sm-3">
                                    	<ul class="text-center pull-center">
	                                       <a href=" " class="btn btn-success btn-circle btn-lg" data-toggle="tooltip" data-original-title="Registrar Nueva Categoría"><i class="fa fa-plus" style="margin-top: 5px;"></i> </a>

	                                        <a target="./blank" href="{{ route('usuarios-pdf') }}" class="btn btn-danger btn-circle btn-lg" data-toggle="tooltip" data-original-title="Imprimir Listado de Marcas"><i class="fa fa-file-pdf-o" style="margin-top: 5px;"></i> </a>
                                    	</ul>
                                    </div>
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre de Usuario</th>
                                                <th>Tipo de Rol</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            @foreach ($usuarios as $usuario)
                                            <tr>
                                                <td> {{ $usuario->id }} </td>
                                                <td> {{ $usuario->login }} </td>
                                                <td> {{ $usuario->rol }} </td>
                                                <td>
                                                    
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
