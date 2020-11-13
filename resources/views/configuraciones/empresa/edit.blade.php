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
                            <div class="white-box">
                                <h1 >Datos de la Empresa</h1>
                                <hr class="m-t-0 m-b-5">
                                <div class="panel-wrapper collapse in" aria-expanded="true">
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" action="{{ route('/empresa/update/', $empresas->id )}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="PUT">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">RIF:</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control" type="text" name="rif" value="{{ $empresas->rif }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Razón Social:</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control" type="text" name="razon_social" value="{{ $empresas->razon_social }}">
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
                                                                <input class="form-control" type="text" name="direccion" value="{{ $empresas->direccion }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Teléfono:</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control" type="text" name="telefono" value="{{ $empresas->telefono }}">
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
                                                                <input class="form-control" type="text" name="iva" value="{{ $empresas->iva }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->

                                                     <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Tipo de Moneda:</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control" type="text" name="tipo_moneda" value="{{ $empresas->tipo_moneda }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    
                                                </div>
                                                <!--/row-->
                                            </div>
                                            <div class="form-actions">
                                                <ul class="pull-right">
                                                    <button type="submit" class="btn btn-info"> <i class="fa fa-pencil"></i> Guardar</button>
                                                </ul>
                                            </div>
                                                    <!--/span-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                                

                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.row -->

@endsection