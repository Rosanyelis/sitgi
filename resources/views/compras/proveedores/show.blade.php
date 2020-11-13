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
                                        <h1 class="m-b-10">Información del  Proveedor</h1>
                                    </div>
                                </div>
                                <br>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">RIF:</label>
                                            <p>{{ $proveedores->rif }} </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Razón Social:</label>
                                             <p>{{ $proveedores->razon_social }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Nombre y Apellido:</label>
                                             <p>{{ $proveedores->nombre }}</p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Telefono:</label>
                                             <p>{{ $proveedores->telefono }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Correo Electrónico:</label>
                                             <p>{{ $proveedores->correo }}</p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Dirección:</label>
                                             <p>{{ $proveedores->direccion }}</p>
                                        </div>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>

@endsection