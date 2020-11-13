@extends('layout')
@section('contenido')
					<div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                        <!-- /.breadcrumb -->
                    </div>
                    <!-- .row -->
                    <div class="row">
                        
                        <div class="col-md-3">
                            <div class="white-box">
                                <h3 class="box-title text-center">Clientes</h3>
                                <ul class="list-inline two-part">
                                    <li><i class="fa fa-group "></i></li>
                                    <li class="text-right"><span class="counter">@foreach($clientes as $cliente) {{ $cliente->total }}@endforeach</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="white-box">
                                <h3 class="box-title text-center">Inventario</h3>
                                <ul class="list-inline two-part">
                                    <li><i class="fa fa-archive "></i></li>
                                    <li class="text-right"><span class="counter">@foreach($productos as $producto) {{ $producto->total }}@endforeach</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="white-box">
                                <h3 class="box-title text-center">Proveedores</h3>
                                <ul class="list-inline two-part">
                                    <li><i class="fa fa-user-secret "></i></li>
                                    <li class="text-right"><span class="counter">@foreach($proveedors as $pro) {{ $pro->total }}@endforeach</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="white-box">
                                <h3 class="box-title text-center">Ventas</h3>
                                <ul class="list-inline two-part">
                                    <li><i class="fa fa-shopping-bag "></i></li>
                                    <li class="text-right"><span class="counter">@foreach($ventas as $vent) {{ $vent->total }}@endforeach</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
@endsection                    