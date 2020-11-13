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
                            <div class="white-box">
                            	<br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h1 class="m-b-10">Registrar una Merma</h1>
                                    </div>
                                </div>
                                <form action="" method="POST" >
                                    <div class="modal-body">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Motivo:</label>
                                                <input type="number" name="motivo" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label class="control-label">Producto:</label>
                                                <select name="id_producto" class="form-control select2 col-12">
                                                    <option >Seleccione un producto...</option>
                                                    @foreach($productos as $producto)
                                                        <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="control-label">Cantidad:</label>
                                                <input type="number" name="cantidad" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Descripción:</label>
                                                <textarea name="descripcion"  class="form-control"></textarea>
                                            </div>
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