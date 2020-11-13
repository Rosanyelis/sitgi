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
                                    <div class="col-sm-12">
                                        <h1 class="m-b-10">Editar Marca</h1>
                                    </div>
                                </div>
                                <form action="{{ route('/marca/update/', $marcas->id )}} " method="POST" >
                                    <div class="modal-body">
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="form-group">
                                            <label class="control-label">Nombre:</label>
                                            <input type="text" name="nombre" value="{{ $marcas->nombre }}"  class="form-control" minlength="5" maxlength="40" required="">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Descripción:</label>
                                            <input type="text" name="descripcion" value="{{ $marcas->descripcion }}"  class="form-control" maxlength="100" required="">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

@endsection