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
                                        <h1 class="m-b-10">Editar Cliente</h1>
                                    </div>
                                </div>
                                <form action="{{ route('/clientes/update/', $clientes->id )}}" method="POST" >
                                    <div class="modal-body">
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Tipo de Documento: *</label>
                                                <select name="tipo_documento" class="custom-select col-12" id="inlineFormCustomSelect" required="">
                                                    @if( $clientes->tipo_documento == 'V-')
                                                    <option selected>{{ $clientes->tipo_documento }}</option>
                                                    <option value="E-">E-</option>
                                                    @elseif($clientes->tipo_documento == 'E-')
                                                    <option selected>{{ $clientes->tipo_documento }}</option>
                                                    <option value="V-">V-</option>
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Numero de documento: * </label>
                                                <input type="number" name="num_documento" value="{{ $clientes->num_documento }}"  class="form-control" minlength="7" maxlength="8" pattern="[0-9]{8}" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Nombre y Apellido: *</label>
                                                <input type="text" name="nombre" value="{{ $clientes->nombre }}"  class="form-control" pattern="[A-Za-z]{10-20}" required="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Telefono: </label>
                                                <input type="text" name="telefono" value="{{ $clientes->telefono }}"  class="form-control" minlength="5" maxlength="40" pattern="[0-9]{8}" required="" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Dirección:</label>
                                                <input name="direccion" value="{{ $clientes->direccion }}"  class="form-control" maxlength="100">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger waves-effect waves-light">Actualizar</button>
                                        </div>  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

@endsection