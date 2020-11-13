@extends('layout')
@section('contenido')

					<div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Clientes</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Clientes</li>
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
                                        <h1 class="m-b-10">Registrar Cliente</h1>
                                    </div>
                                </div>
                                <form action="{{ route('/clientes/store')}}" method="POST" >
                                    <div class="modal-body">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Tipo de Documento:</label>
                                                <select name="tipo_documento" class="custom-select col-12" required="">
                                                    <option selected>Seleccione..</option>
                                                    <option value="V-">V-</option>
                                                    <option value="E-">E-</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Numero de documento:</label>
                                                <input type="number" name="num_documento" class="form-control" placeholder="26115685" minlength="7" maxlength="8" pattern="[0-9]{8}" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Nombre y Apellido:</label>
                                                <input type="text" name="nombre" class="form-control" placeholder="Maria Fabiola Giraldo" pattern="[A-Za-z]{10-20}"  required="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Telefono:</label>
                                                <input type="number" name="telefono" placeholder="0264987564" pattern="[0-9]{8}" class="form-control" minlength="11" maxlength="12" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Dirección:</label>
                                                <textarea name="direccion" class="form-control" placeholder="Vía Principal de Playa Grande" pattern="[A-Za-z]{30-40}"  maxlength="50"></textarea>
                                            </div>
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