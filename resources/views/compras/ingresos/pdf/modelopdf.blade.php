<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            <h1 style="text-align: center;">Detalles de Ingreso de Productos</h1>
            <br>
            <br>
    		<center>
        		<table class="table" style="font-size: 12px;">
        			<tr>
        				<td><b>Proveedor</b></td>
        				<td><b>Fecha</b></td>
        				<td><b>Comprobante</b></td>
        			</tr>
        			<tr>
        				<td>{{ $ingresos->nombre }}</td>
        				<td>{{ $ingresos->fecha_hora }}</td>
        				<td>{{ $ingresos->tipocomprobante }}:{{ $ingresos->seriecomprobante }} - {{ $ingresos->numcomprobante }}</td>
        			</tr>
        		</table>
    		</center>
            <table  class="table table-striped " style="font-size: 12px;">
                <thead style="background-color: #A9D0F5">
                    <tr>
                        <th>Lote</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio/Costo</th>
                        <th>Precio/Venta</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($detalles as $det)
                        <tr>
                            <td> {{ $det->lote }} </td>
                            <td> {{ $det->producto }} </td>
                            <td> {{ $det->cantidad }} </td>
                            <td> {{ $det->precio_costo }} </td>
                            <td> {{ $det->precio_venta }} </td>
                            <td> {{ $det->cantidad * $det->precio_costo }} </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4"><h3>TOTAL</h3></th>
                        
                        <th colspan="2"><h3>Bs.S {{ $ingresos->total }}</h3></th>
                    </tr>
                </tfoot>
            </table>
        </div>
	</body>
</html>