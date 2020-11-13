<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ClienteFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use App\Cliente;

class ClienteController extends Controller
{

    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('ventas.clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventas.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Cliente;
        $clientes->tipo_documento   = $request->tipo_documento;
        $clientes->num_documento = $request->num_documento;
        $clientes->nombre = $request->nombre;
        $clientes->direccion = $request->direccion;
        $clientes->telefono = $request->telefono;
        $clientes->save();

        return redirect()->route('clientes')->with('info', 'El cliente fue registrado con éxito');
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
        $clientes = Cliente::find($id);
        return view('ventas.clientes.edit', compact('clientes'));
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
        $clientes = Cliente::find($id);
        $clientes->tipo_documento   = $request->tipo_documento;
        $clientes->num_documento = $request->num_documento;
        $clientes->nombre = $request->nombre;
        $clientes->direccion = $request->direccion;
        $clientes->telefono = $request->telefono;
        $clientes->save();

        return redirect()->route('clientes')->with('info', 'El cliente fue actualizado con éxito');
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
        $clientes = Cliente::all();

        $pdf = PDF::loadView('ventas.clientes.pdf.clientespdf', compact('clientes'));        

        return $pdf->stream('listado-clientes.pdf');
    }
}
