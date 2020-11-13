@extends('layout')
@section('contenido')
					<div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Marcas</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Marcas</li>
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
                                        <h1 class="m-b-10">Listado de Marcas</h1>
                                    </div>
                                    <div class="col-sm-3">
                                    	<ul class="text-center pull-center">
	                                       <a href=" {{ route('/marca/create') }} " class="btn btn-success btn-circle btn-lg" data-toggle="tooltip" data-original-title="Registrar Nueva Categoría"><i class="fa fa-plus" style="margin-top: 5px;"></i> </a>

	                                        <a target="./blank" href="{{ route('marcas-pdf') }}" class="btn btn-danger btn-circle btn-lg" data-toggle="tooltip" data-original-title="Imprimir Listado de Marcas"><i class="fa fa-file-pdf-o" style="margin-top: 5px;"></i> </a>
                                    	</ul>
                                    </div>
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre de la Marca y Descripción</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            @foreach ($marcas as $marca)
                                            <tr>
                                                <td> {{ $marca->id }} </td>
                                                <td> <b>{{ $marca->nombre }}:</b>{{ $marca->descripcion }} </td>
                                                <td>
                                                    <a href="{{ route('/marca/edit/', $marca->id) }}" class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Editar Categoría"> <i class="fa fa-pencil text-inverse"></i> </a >
                                                    
                                                    <a data-toggle="modal" data-target="#modal-delete-{{ $marca->id }}"><button class="btn btn-default btn-rounded" data-toggle="tooltip" data-original-title="Desactivar Categoría"> <i class="fa fa-times text-inverse"></i> </button></a>
                                                </td>
                                            </tr>

                                            <!-- /.modal -->
                                            <div id="modal-delete-{{ $marca->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form action="{{ route('/marca/destroy/', $marca->id) }}" method="POST">
                                                        @csrf
                                                            <input type="hidden" name="_method" value="DELETE">

                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h3 class="modal-title">Eliminar Marca</h3>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h4>Estás Seguro de Eliminar la Marca?</h4>
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
