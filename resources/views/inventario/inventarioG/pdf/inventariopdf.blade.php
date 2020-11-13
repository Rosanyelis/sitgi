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
			<h1 style="text-align: center;">Inventario General</h1>
			<br>
			<br>
			
			<div class="table-responsive" style="font-size: 12px;">
	            <table class="table table-striped">
	                <thead>
	                    <tr>
	                        <th>Lote</th>
                            <th>Código</th>
                            <th>Nombre y Marca>
                            <th>Stock</th>
                            <th>Precio/Venta</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach ($inventarios as $inv)
                        <tr>
                            <td> {{ $inv->lote }} </td>
                            <td> {{ $inv->codigo }} </td>
                            <td> {{ $inv->nombre }}-{{ $inv->marca }} </td>
                            <td> {{ $inv->stock }} </td>
                            <td> {{ $inv->precio }} </td>
                        </tr>
                        @endforeach
	                </tbody>
	            </table>

	        </div>
		</div>
	</body>
</html>