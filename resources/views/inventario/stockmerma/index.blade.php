@extends('layout')
@section('contenido')
					<div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Stock de Mermas</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Stock de Mermas</li>
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
                                        <h1 class="m-b-10">Listado de Mermas</h1>
                                    </div>
                                    <div class="col-sm-3">
                                    	<ul class="text-center pull-center">
	                                       <a href=" {{ route('/stockmerma/create') }} " class="btn btn-success btn-circle btn-lg" data-toggle="tooltip" data-original-title="Registrar Nueva Categoría"><i class="fa fa-plus" style="margin-top: 5px;"></i> </a>

	                                        <button type="button" class="btn btn-danger btn-circle btn-lg" data-toggle="tooltip" data-original-title="Imprimir Listado de Categoría"><i class="fa fa-file-pdf-o"></i> </button>
                                    	</ul>
                                    </div>
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Motivo</th>
                                                <th>Descripcion</th>
                                                <th>Cantidad</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            @foreach ($mermas as $merma)
                                            <tr>
                                                <td> {{ $merma->id }} </td>
                                                <td> <b> {{ $merma->nombre }}:</b> {{ $merma->descripcion }} </td>
                                                <td>
                                                    <a href="" class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Editar Categoría"> <i class="fa fa-pencil text-inverse"></i> </a >
                                                    <a data-toggle="modal" data-target="#modal-delete-">
                                                        <button class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Desactivar Categoría"> <i class="fa fa-times text-inverse"></i></button>
                                                    </a>
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

