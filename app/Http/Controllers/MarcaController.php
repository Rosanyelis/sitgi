<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\MarcaFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use App\Marca;

class MarcaController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Marca::all();
        return view('configuraciones.marcas.index', compact('marcas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configuraciones.marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarcaFormRequest $request)
    {
        $marcas = new  Marca();
        $marcas->nombre = $request->input('nombre');
        $marcas->descripcion = $request->input('descripcion');
        $marcas->save();

        return redirect()->route('marca')->with('info', 'La marca fue registrado con exito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marcas =  Marca::find($id);
        return view('configuraciones.marcas.edit', compact('marcas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MarcaFormRequest $request, $id)
    {
        $marcas =  Marca::find($id);
        $marcas->nombre = $request->nombre;
        $marcas->descripcion = $request->descripcion;
        $marcas->save();

        return redirect()->route('marca')->with('info', 'La marca fue actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marcas =  Marca::find($id);
        $marcas->delete();

        return  redirect()->route('marca')->with('info', 'La marca fue eliminado con exito');
    }

    public function pdf()
    {
        $marcas = Marca::all();

        $pdf = PDF::loadView('configuraciones.marcas.pdf.pdfmarcas', compact('marcas'));        

        return $pdf->stream('listado-marcas.pdf');
    }
}
