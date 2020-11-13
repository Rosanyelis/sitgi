<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade as PDF;


class InventariogeneralController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarios = DB::table('productos as p')
                    ->join('marcas as m', 'p.id_marca','=', 'm.id')
                    ->join('detalles_ingresos as di','di.id_producto','=','p.id')
                    ->select('p.codigo as codigo','p.nombre as nombre','m.nombre as marca','p.stock as stock','di.lote as lote','di.precio_venta as precio')
                    ->get();

        return view('inventario.inventarioG.index',compact('inventarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $inventarios = DB::table('productos as p')
                    ->join('marcas as m', 'p.id_marca','=', 'm.id')
                    ->join('detalles_ingresos as di','di.id_producto','=','p.id')
                    ->select('p.codigo as codigo','p.nombre as nombre','m.nombre as marca','p.stock as stock','di.lote as lote','di.precio_venta as precio')
                    ->get();

        $pdf = PDF::loadView('inventario.inventarioG.pdf.inventariopdf', compact('inventarios'));        

        return $pdf->stream('listado-inventario.pdf');
    }
}
