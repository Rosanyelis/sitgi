<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Collection;
use App\Http\Requests\IngresoFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use App\Ingreso;
use App\DetallesIngreso;

use Carbon\Carbon;
use Response;


class IngresoController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresos = DB::table('ingresos as i')
                    ->join('proveedors as p','i.id_proveedor','=','p.id')
                    ->join('detalles_ingresos as di','i.id','=','di.id_ingreso')
                    ->select('i.id','i.fecha_hora','p.nombre','i.tipocomprobante','i.seriecomprobante','i.numcomprobante','i.impuesto',DB::raw('sum(di.cantidad*precio_costo) as total'))
                    ->groupBy('i.id','i.fecha_hora','p.nombre','i.tipocomprobante','i.seriecomprobante','i.numcomprobante','i.impuesto')
                    ->get();
                    //
        return view('compras.ingresos.index', compact('ingresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = DB::table('proveedors')->get();
        $productos   = DB::table('productos as pro')
                        ->select(DB::raw('CONCAT(pro.codigo," ", pro.nombre) AS producto'), 'pro.id')
                        ->get();

        return view('compras.ingresos.create', compact('proveedores','productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IngresoFormRequest $request)
    {

        $ingresos  = new Ingreso;
        $ingresos->id_proveedor  = $request->get('id_proveedor');
        $ingresos->tipocomprobante = $request->get('tipocomprobante');
        $ingresos->seriecomprobante = $request->get('seriecomprobante');
        $ingresos->numcomprobante = $request->get('numcomprobante');

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

            while ($cont < count($id_producto)) {

                $detalles = new DetallesIngreso();
                $detalles->id_ingreso = $ingresos->id;
                $detalles->lote = $lote[$cont];
                $detalles->id_producto = $id_producto[$cont];
                $detalles->cantidad = $cantidad[$cont];
                $detalles->precio_costo = $precio_costo[$cont];
                $detalles->precio_venta = $precio_venta[$cont];
                $detalles->save();
                $cont=$cont+1;
            }

        return redirect()->route('ingresos')->with('info', 'Se realizó el ingreso de productos al sistema Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingresos = DB::table('ingresos as i')
                    ->join('proveedors as p','i.id_proveedor','=','p.id')
                    ->join('detalles_ingresos as di','i.id','=','di.id_ingreso')
                    ->select('i.id','i.fecha_hora','p.nombre','i.tipocomprobante','i.seriecomprobante','i.numcomprobante','i.impuesto',DB::raw('sum(di.cantidad*precio_costo) as total'))
                    ->where('i.id','=',$id)
                    ->groupBy('i.id','i.fecha_hora','p.nombre','i.tipocomprobante','i.seriecomprobante','i.numcomprobante','i.impuesto')
                    ->first();

        $detalles = DB::table('detalles_ingresos as d')
                    ->join('productos as p', 'd.id_producto','=','p.id')
                    ->select('d.lote','p.nombre as producto','d.cantidad','d.precio_costo','d.precio_venta')
                    ->where('d.id_ingreso','=',$id)
                    ->get();

        return view('compras.ingresos.show', compact('ingresos','detalles'));

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
        //
    }

    public function pdf()
    {
        $ingresos = DB::table('ingresos as i')
                    ->join('proveedors as p','i.id_proveedor','=','p.id')
                    ->join('detalles_ingresos as di','i.id','=','di.id_ingreso')
                    ->select('i.id','i.fecha_hora','p.nombre','i.tipocomprobante','i.seriecomprobante','i.numcomprobante','i.impuesto',DB::raw('sum(di.cantidad*precio_costo) as total'))
                    ->groupBy('i.id','i.fecha_hora','p.nombre','i.tipocomprobante','i.seriecomprobante','i.numcomprobante','i.impuesto')
                    ->get();

        $pdf = PDF::loadView('compras.ingresos.pdf.ingresospdf', compact('ingresos'));        

        return $pdf->stream('listado-ingresos.pdf');
    }

    public function modelo_pdf($id)
    {
        $ingresos = DB::table('ingresos as i')
                    ->join('proveedors as p','i.id_proveedor','=','p.id')
                    ->join('detalles_ingresos as di','i.id','=','di.id_ingreso')
                    ->select('i.id','i.fecha_hora','p.nombre','i.tipocomprobante','i.seriecomprobante','i.numcomprobante','i.impuesto',DB::raw('sum(di.cantidad*precio_costo) as total'))
                    ->where('i.id','=',$id)
                    ->groupBy('i.id','i.fecha_hora','p.nombre','i.tipocomprobante','i.seriecomprobante','i.numcomprobante','i.impuesto')
                    ->first();

        $detalles = DB::table('detalles_ingresos as d')
                    ->join('productos as p', 'd.id_producto','=','p.id')
                    ->select('d.lote','p.nombre as producto','d.cantidad','d.precio_costo','d.precio_venta')
                    ->where('d.id_ingreso','=',$id)
                    ->get();

        $pdf = PDF::loadView('compras.ingresos.pdf.modelopdf', compact('ingresos','detalles'));        

        return $pdf->stream('modelo-pdf.pdf');
    }
}
