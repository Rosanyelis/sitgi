<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProveedorFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use App\Proveedor;

class ProveedorController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('compras.proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compras.proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProveedorFormRequest $request)
    {
        $proveedores = new Proveedor();
        $proveedores->nombre = $request->input('nombre');
        $proveedores->razon_social = $request->input('razon_social');
        $proveedores->rif = $request->input('rif');
        $proveedores->direccion = $request->input('direccion');
        $proveedores->correo = $request->input('correo');
        $proveedores->telefono = $request->input('telefono');
        //$proveedores->estatus = 1;
        $proveedores->save();

        return redirect()->route('proveedores')->with('info', 'El proveedor fue registrado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedores = Proveedor::find($id);
        return view('compras.proveedores.show', compact('proveedores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedores = Proveedor::find($id);
        return view('compras.proveedores.edit', compact('proveedores'));
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
        $proveedores = Proveedor::find($id);
        $proveedores->nombre = $request->input('nombre');
        $proveedores->razon_social = $request->input('razon_social');
        $proveedores->rif = $request->input('rif');
        $proveedores->direccion = $request->input('direccion');
        $proveedores->correo = $request->input('correo');
        $proveedores->telefono = $request->input('telefono');
        //$proveedores->estatus = 1;
        $proveedores->save();

        return redirect()->route('proveedores')->with('info', 'El proveedor fue actualizado con exito');
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
        $proveedores = Proveedor::all();

        $pdf = PDF::loadView('compras.proveedores.pdf.pdfproveedores', compact('proveedores'));        

        return $pdf->stream('listado-proveedores.pdf');
    }
}
