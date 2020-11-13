@extends('layout')
@section('contenido')
					<div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Reportes Estadísticos</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Reportes Estadísticos</li>
                            </ol>
                        </div>
                        <!-- /.breadcrumb -->
                    </div>
                    <!-- /row -->
                    <div class="row">
                        
                        <div class="col-sm-6">
                            <div class="white-box">
                                <h3 class="box-title">Bar Chart</h3>
                                <div>
                                    <canvas id="chart2" height="150"></canvas>
                                </div>
                            </div>
                        </div>

                    </div>
                    


@endsection

