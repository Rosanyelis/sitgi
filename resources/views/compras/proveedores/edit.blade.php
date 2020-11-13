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
                            <div class="white-box">
                            	<br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h1 class="m-b-10">Editar Proveedor</h1>
                                    </div>
                                </div>
                                <form action="{{ route('/proveedores/update/', $proveedores->id)}}" method="POST" >
                                    <div class="modal-body">
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">RIF:</label>
                                                <input type="text" name="rif" value="{{ $proveedores->rif }}" class="form-control" minlength="7" maxlength="13"  required="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Razón Social:</label>
                                                <input type="text" name="razon_social" value="{{ $proveedores->razon_social }}" class="form-control" pattern="[A-Za-z]{10-50}"  required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Nombre y Apellido:</label>
                                                <input type="text" name="nombre" value="{{ $proveedores->nombre }}" class="form-control" pattern="[A-Za-z]{10-20}"  required="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Telefono:</label>
                                                <input type="text" name="telefono" value="{{ $proveedores->telefono }}" pattern="[0-9]{11}" class="form-control" minlength="11" maxlength="12" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Correo Electrónico:</label>
                                                <input type="text" name="correo" value="{{ $proveedores->correo }}" class="form-control"  required="">
                                            </div>
                                        </div>
                                            
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Dirección:</label>
                                                <input name="direccion" value="{{ $proveedores->direccion }}" class="form-control" pattern="[A-Za-z]{30-40}"  maxlength="50">
                                            </div>
                                        </div>
                                    
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger waves-effect waves-light">Guardar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

@endsection