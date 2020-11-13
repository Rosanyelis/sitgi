<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title></title>
		<style type="text/css" media="screen">

			table {
			  	border-collapse: collapse;
			  	background-color: transparent;
			}
			th {
  				text-align: left;
			}
			.table-striped tbody tr:nth-of-type(odd) {
			  background-color: rgba(0, 0, 0, 0.05);
			}
			.table {
			  width: 100%;
			  max-width: 100%;
			  margin-bottom: 1rem;
			}

			.table th,
			.table td {
			  padding: 0.75rem;
			  vertical-align: top;
			  border-top: 1px solid #eceeef;
			}

			.table thead th {
			  vertical-align: bottom;
			  border-bottom: 2px solid #eceeef;
			}

			.table tbody + tbody {
			  border-top: 2px solid #eceeef;
			}

			.table .table {
			  background-color: #fff;
			}
		</style>
	</head>
	<body style="font-family: Arial, sans-serif; ">
		<div class="container-fluid">
			<h1 style="text-align: center;">Listado de Ventas</h1>
			<br>
			<br>
			
			<div class="table-responsive" style="font-size: 12px;">
	            <table class="table table-striped">
	                <thead>
	                    <tr>
	                        <th>#</th>
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>Comprobante</th>
                            <th>Total Venta</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach ($ventas as $venta)
	                	<tr>
		                    <td> {{ $venta->id }} </td>
	                        <td> {{ $venta->fecha_hora }} </td>
	                        <td> {{ $venta->nombre }} </td>
	                        <td> {{ $venta->tipocomprobante }}: {{ $venta->seriecomprobante }} - {{ $venta->numcomprobante }}</td>
	                        <td>Bs.S {{ $venta->totalventa }} </td>
	                    </tr>
	                    @endforeach
	                </tbody>
	            </table>

	        </div>
		</div>
	</body>
</html>