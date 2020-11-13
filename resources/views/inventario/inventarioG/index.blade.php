@extends('layout')
@section('contenido')
					<div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Inventario de la Empresa</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Inventario de la Empresa</li>
                            </ol>
                        </div>
                        <!-- /.breadcrumb -->
                    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-sm-12">
                            @include('configuraciones.categorias.fragments.info')
                            <div class="white-box">
                            	<br>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h1 class="m-b-10">Inventario de la Empresa</h1>
                                    </div>
                                    <div class="col-sm-3">
                                    	<ul class="text-center pull-center">
	                                       <a href=" {{ route('/ventas/create')}} " class="btn btn-success btn-circle btn-lg" data-toggle="tooltip" data-original-title="Registrar Nueva Venta"><i class="fa fa-plus" style="margin-top: 5px;"></i> </a>

	                                        <a target="./blank" href="{{ route('inventario-pdf')}}" class="btn btn-danger btn-circle btn-lg" data-toggle="tooltip" data-original-title="Imprimir Listado de Inventario General" ><i class="fa fa-file-pdf-o" style="margin-top: 5px;"></i> </a>
                                    	</ul>
                                    </div>
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Lote</th>
                                                <th>Código</th>
                                                <th>Nombre y Marca>
                                                <th>Stock</th>
                                                <th>Precio/Venta</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            @foreach ($inventarios as $inv)
                                            <tr>
                                                <td> {{ $inv->lote }} </td>
                                                <td> {{ $inv->codigo }} </td>
                                                <td> {{ $inv->nombre }}-{{ $inv->marca }} </td>
                                                <td> {{ $inv->stock }} </td>
                                                <td> Bs.S {{ $inv->precio }} </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


@endsection

