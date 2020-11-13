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
                                        <h1 class="m-b-10">Registrar Proveedor</h1>
                                    </div>
                                </div>
                                <form action="{{ route('/proveedores/store')}}" method="POST" autocomplete="off">
                                    <div class="modal-body">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">RIF:</label>
                                                <input type="text" name="rif" class="form-control" placeholder="J-261156489" maxlength="11"  required>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Razón Social:</label>
                                                <input type="text" name="razon_social" class="form-control" placeholder="La Carabobeña C.A" pattern="[A-Za-z]{10-50}"  required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Nombre y Apellido:</label>
                                                <input type="text" name="nombre" class="form-control" placeholder="Jose Manuel Campera" pattern="[A-Za-z]{10-20}"  required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Telefono:</label>
                                                <input type="number" name="telefono" pattern="[0-9]{12}" class="form-control" placeholder="04148035352"  maxlength="12" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Correo Electrónico:</label>
                                                <input type="correo" name="correo" class="form-control" placeholder="carabobeña@gmail.com"  required>
                                            </div>
                                        </div>
                                            
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Dirección:</label>
                                                <textarea name="direccion" class="form-control" placeholder="Carupano, Calle las Brisas" pattern="[A-Za-z]{30-40}"  maxlength="50" required></textarea>
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