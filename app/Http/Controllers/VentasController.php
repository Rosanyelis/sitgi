<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Collection;
use App\Http\Requests\VentaFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use App\Venta;
use App\DetalleVenta;

use Carbon\Carbon;
use Response;

class VentasController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = DB::table('ventas as v')
                    ->join('empresas as e','v.id_empresa','=','e.id')
                    ->join('clientes as c','v.id_cliente','=','c.id')
                    ->join('detalles_ventas as dv','v.id','=','dv.id_venta')
                    ->select('v.id','v.fecha_hora','c.nombre','v.tipocomprobante','v.seriecomprobante','v.numcomprobante','v.impuesto','v.estatus','v.totalventa')
                    ->groupBy('v.id','v.fecha_hora','c.nombre','v.tipocomprobante','v.seriecomprobante','v.numcomprobante','v.impuesto','v.estatus')
                    ->get();
                    //
        return view('ventas.ventas.index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes   = DB::table('clientes')->get();
        $productos  = DB::table('productos as pro')
                        ->join('detalles_ingresos as di','pro.id','=','di.id_producto')
                        ->select(DB::raw('CONCAT(pro.codigo," ",pro.nombre) AS producto'), 'pro.id', 'pro.stock',DB::raw('sum(di.precio_costo*1.30) as precio'))
                        ->where('pro.stock','>','0')
                        ->groupBy('producto','pro.id','pro.stock')
                        ->get();

        return view('ventas.ventas.create', compact('clientes','productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VentaFormRequest $request)
    {
        $ventas  = new Venta;
        $ventas->id_empresa = '1';
        $ventas->id_cliente  = $request->get('id_cliente');
        $ventas->tipocomprobante = $request->get('tipocomprobante');
        $ventas->seriecomprobante = $request->get('seriecomprobante');
        $ventas->numcomprobante = $request->get('numcomprobante');
        $ventas->totalventa = $request->get('totalventa');

        $mytime = Carbon::now('America/Caracas');

        $ventas->fecha_hora = $mytime->toDatetimeString();
        $ventas->impuesto = '16';
        $ventas->estatus = '1';
        $ventas->save();
        
        $id_producto = $request->get('id_producto');
        $cantidad = $request->get('cantidad');
        $precio_venta = $request->get('precio_venta');

        $cont = 0;

            while ($cont < count($id_producto)) {

                $detalles = new DetalleVenta();
                $detalles->id_venta = $ventas->id;
                $detalles->id_producto = $id_producto[$cont];
                $detalles->cantidad = $cantidad[$cont];
                $detalles->precio_venta = $precio_venta[$cont];
                $detalles->save();
                $cont=$cont+1;
            }

        return redirect()->route('ventas')->with('info', 'Se realizó la venta Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ventas = DB::table('ventas as v')
                    ->join('empresas as e','v.id_empresa','=','e.id')
                    ->join('clientes as c','v.id_cliente','=','c.id')
                    ->join('detalles_ventas as di','v.id','=','di.id_venta')
                    ->select('e.rif','e.razon_social','e.direccion','e.telefono','v.id','v.fecha_hora','c.nombre','c.tipodocumento','c.numdocumento','v.tipocomprobante','v.seriecomprobante','v.numcomprobante','v.impuesto','v.totalventa')
                    ->where('v.id','=',$id)
                    ->groupBy('e.rif','e.razon_social','e.direccion','e.telefono','v.id','v.fecha_hora','c.nombre','c.tipodocumento','c.numdocumento','v.tipocomprobante','v.seriecomprobante','v.numcomprobante','v.impuesto','v.totalventa')
                    ->first();

        $detalles = DB::table('detalles_ventas as d')
                    ->join('productos as p', 'd.id_producto','=','p.id')
                    ->select('p.nombre as producto','d.cantidad','d.precio_venta')
                    ->where('d.id_venta','=',$id)
                    ->get();

        return view('ventas.ventas.show', compact('ventas','detalles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ventas=Venta::findOrFail($id);
        $ventas->estatus='0';
        $ventas->update();

        return redirect()->route('ventas')->with('info', 'La venta fué anulada exitosamente');
    }

    public function pdf()
    {
        $ventas = DB::table('ventas as v')
                    ->join('empresas as e','v.id_empresa','=','e.id')
                    ->join('clientes as c','v.id_cliente','=','c.id')
                    ->join('detalles_ventas as dv','v.id','=','dv.id_venta')
                    ->select('v.id','v.fecha_hora','c.nombre','v.tipocomprobante','v.seriecomprobante','v.numcomprobante','v.impuesto','v.estatus','v.totalventa')
                    ->groupBy('v.id','v.fecha_hora','c.nombre','v.tipocomprobante','v.seriecomprobante','v.numcomprobante','v.impuesto','v.estatus')
                    ->get();
                    //
         $pdf = PDF::loadView('ventas.ventas.pdf.ventaspdf', compact('ventas'));        

        return $pdf->stream('ventas-pdf.pdf');
    }
}
