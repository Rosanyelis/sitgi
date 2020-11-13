@extends('layout')
@section('contenido')

					<div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Empresa</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Empresa</li>
                            </ol>
                        </div>
                        <!-- /.breadcrumb -->
                    </div>

                    <!-- /row -->
                    <div class="row">
                        <div class="col-sm-12">
                            @include('configuraciones.empresa.fragments.info')
                            <div class="white-box">
                                <h1 >Datos de la Empresa</h1>
                                <hr class="m-t-0 m-b-5">
                                <div class="panel-wrapper collapse in" aria-expanded="true">
                                    <div class="panel-body">
                                        <div class="form-horizontal" role="form">
                                            <div class="form-body">
                                            @foreach ($empresas as $empresa)
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">RIF:</label>
                                                            <div class="col-md-9">
                                                                <p class="form-control-static"> {{ $empresa->rif }} </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Razón Social:</label>
                                                            <div class="col-md-9">
                                                                <p class="form-control-static"> {{ $empresa->razon_social }} </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Dirección:</label>
                                                            <div class="col-md-9">
                                                                <p class="form-control-static"> {{ $empresa->direccion }} </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Teléfono:</label>
                                                            <div class="col-md-9">
                                                                <p class="form-control-static"> {{ $empresa->telefono }} </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">IVA:</label>
                                                            <div class="col-md-9">
                                                                <p class="form-control-static"> {{ $empresa->iva }} </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->

                                                     <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Tipo de Moneda:</label>
                                                            <div class="col-md-9">
                                                                <p class="form-control-static"> {{ $empresa->tipo_moneda }} </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->
                                            </div>
                                            <div class="form-actions">
                                                <ul class="pull-right">
                                                    <a href="{{ route('/empresa/edit/', $empresa->id) }}" class="btn btn-info"> <i class="fa fa-pencil"></i> Editar</a>
                                                </ul>
                                            </div>
                                            @endforeach    
                                        </div>
                                    </div>
                                </div>
                            </div>
                                

                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.row -->

@endsection