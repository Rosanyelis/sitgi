@extends('layout')
@section('contenido')

					<div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Productos</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Productos</li>
                            </ol>
                        </div>
                        <!-- /.breadcrumb -->
                    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                            	<br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h1 class="m-b-10">Modificar Producto</h1>
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
                                <form action="{{ route('/productos/update/', $productos->id )}}" method="POST" >
                                    <div class="modal-body">
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Categoría:</label>
                                                <select name="id_categoria" class="custom-select col-12">
                                                    <option selected>Seleccione la categoría del producto..</option>
                                                    @foreach($categories as $categoria)
                                                        @if($categoria->id==$productos->id_categoria)
                                                            <option value="{{ $categoria->id }}" selected>{{ $categoria->nombre }}</option>
                                                        @else
                                                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Marca:</label>
                                                <select name="id_marca" class="custom-select col-12">
                                                    <option selected>Seleccione la marca del producto..</option>
                                                    @foreach($marcas as $marca)
                                                        @if($marca->id==$productos->id_marca)
                                                            <option value="{{ $marca->id }}" selected>{{ $marca->nombre }}</option>
                                                        @else
                                                            <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Código del Producto (Código de Barra):</label>
                                                <input type="text" name="codigo" class="form-control" value="{{ $productos->codigo }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Número de Lote del Producto:</label>
                                                <input type="text" name="lote" class="form-control" value="{{ $productos->lote }}" >
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Nombre del Producto:</label>
                                                <input type="text" name="nombre" class="form-control" value="{{ $productos->nombre }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Detalles del Producto:</label>
                                                <input type="text" name="descripcion" class="form-control" value="{{ $productos->descripcion }}" >
                                            </div>
                                        </div>
                                            
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Stock del Producto:</label>
                                                <input type="text" name="stock" class="form-control" value="{{ $productos->stock }}">
                                            </div>
                                        </div>
                                    
                                        <div class="modal-footer"> 
                                            <button type="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-save"></i> Guardar</button>
                                            <button type="reset" class="btn btn-danger waves-effect waves-light"><i class="fa fa-eraser"></i> Limpiar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

@endsection