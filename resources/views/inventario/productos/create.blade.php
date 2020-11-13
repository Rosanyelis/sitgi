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
                                        <h1 class="m-b-10">Registrar Producto</h1>
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
                                <form action="{{ route('/productos/store')}}" method="POST" >
                                    <div class="modal-body">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Categoría:</label>
                                                <select name="id_categoria" class="custom-select col-12" required="">
                                                    <option selected>Seleccione la categoría del producto..</option>
                                                    @foreach($categories as $categoria)
                                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Marca:</label>
                                                <select name="id_marca" class="custom-select col-12" required="">
                                                    <option selected>Seleccione la marca del producto..</option>
                                                    @foreach($marcas as $marca)
                                                    <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Código del Producto (Código de Barra):</label>
                                                <input type="text" name="codigo" class="form-control" placeholder="1246892530014" required="">
                                            </div>
                                             <div class="form-group col-md-6">
                                                <label class="control-label">Nombre del Producto:</label>
                                                <input type="text" name="nombre" class="form-control" placeholder="Clavos de Acero"  required="">
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                           
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Detalles del Producto:</label>
                                                <input type="text" name="descripcion" class="form-control" placeholder="1 pulgada"  required="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Stock del Producto:</label>
                                                <input type="text" name="stock" class="form-control" placeholder="50"  required="">
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