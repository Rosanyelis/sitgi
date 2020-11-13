@extends('layout')
@section('contenido')

					<div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Categorías</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Categorías</li>
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
                                    <div class="col-sm-12">
                                        <h1 class="m-b-10">Registrar Categoría</h1>

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

                                <form id="formulario" action="{{ route('/categoria/store') }}" method="POST" autocomplete="off">

                                    <div class="modal-body">
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label">Nombre:</label>
                                            <input type="text" name="nombre"  class="form-control" placeholder="Construccion" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Descripción:</label>
                                            <textarea name="descripcion"  class="form-control" placeholder="Es el area en donde se tienen todo tipo de materiales para construir casas, edificios, albañileria y mas.."></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer"> 
                                        <button type="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-save"></i> Guardar</button>
                                        <button type="reset" class="btn btn-danger waves-effect waves-light"><i class="fa fa-eraser"></i> Limpiar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                                
@endsection