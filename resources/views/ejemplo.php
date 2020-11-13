try{
            DB::beginTransaction();

            $ingresos  = new Ingreso;
            $ingresos->id_proveedor  = $request->get('id_proveedor');
            $ingresos->tipocomprobante = $request->get('tipocomprobante');
            $ingresos->seriecomprobante = $request->get('numcomprobante');
            $mytime = Carbon::now('America/Caracas');
            $ingresos->fecha_hora = $mytime->toDatetimeString();
            $ingresos->impuesto = '16';
            $ingresos->save();


            $id_producto = $request->get('id_producto');
            $lote = $request->get('lote');
            $cantidad = $request->get('cantidad');
            $precio_costo = $request->get('precio_costo');
            $precio_venta = $request->get('precio_venta');

            $cont = 0;

            while ($cont < count($id_articulo)) {

                $detalles = new DetallesIngreso();
                $detalles->id_ingreso = $ingresos->id;
                $detalles->id_articulo = $id_articulo[$cont];
                $detalles->cantidad = $cantidad[$cont];
                $detalles->precio_costo = $precio_costo[$cont];
                $detalles->precio_venta = $precio_venta[$cont];
                $detalles->save();
                $cont=$cont+1;
            }
            DB::commit();

        }catch(\Exception $e){

            DB::rollback();
        }



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


                                                        $detalles = DB::table('detalles_ingresos as d')
                    ->join('productos as p', 'd.id_producto','=','p.id')
                    ->select('d.lote','p.nombre as producto','d.cantidad','d.precio_costo','d.precio_venta')
                    ->where('d.id_ingreso','=',$id)
                    ->get();