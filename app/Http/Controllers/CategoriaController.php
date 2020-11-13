<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CategoriaFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use App\Categoria;


class CategoriaController extends Controller
{

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categoria::all();
        return view('configuraciones.categorias.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configuraciones.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaFormRequest $request)
    {
        $categories = new Categoria();
        $categories->nombre = $request->input('nombre');
        $categories->descripcion = $request->input('descripcion');
        $categories->save();

        return redirect()->route('categoria')->with('info', 'La marca fue registrado con exito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $categories = Categoria::find($id);
        return view('configuraciones.categorias.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaFormRequest $request, $id)
    {
        //return $request;
        $categories = Categoria::find($id);
        $categories->nombre = $request->nombre;
        $categories->descripcion = $request->descripcion;
        $categories->save();

        return redirect()->route('categoria')->with('info', 'La categoría fue actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Categoria::find($id);
        $categories->delete();

        return  redirect()->route('categoria')->with('info', 'La categoría fue eliminada con exito');
    }

    public function pdf()
    {
        $categories = Categoria::all();

        $pdf = PDF::loadView('configuraciones.categorias.pdf.pdfcategorias', compact('categories'));        

        return $pdf->stream('listado-categorias.pdf');
    }
}
