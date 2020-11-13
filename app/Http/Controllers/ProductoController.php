<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProductoFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use App\Producto;
use App\Categoria;
use App\Marca;

class ProductoController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = DB::table('productos as p')
                        ->join('categorias as c', 'p.id_categoria', '=', 'c.id')
                        ->join('marcas as m', 'p.id_marca', '=', 'm.id')
                        ->select('p.id','p.codigo','p.nombre','p.descripcion','p.stock','c.nombre as categoria','m.nombre as marca')
                        ->get();

        return view('inventario.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categoria::all();
        $marcas = Marca::all();
        return view('inventario.productos.create', compact('categories','marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoFormRequest $request)
    {
        
        $Productos = new Producto();
        $Productos->codigo = $request->input('codigo');
        $Productos->nombre = $request->input('nombre');
        $Productos->descripcion = $request->input('descripcion');
        $Productos->stock = $request->input('stock');
        $Productos->id_categoria = $request->input('id_categoria');
        $Productos->id_marca = $request->input('id_marca');
        $Productos->save();

        return redirect()->route('productos')->with('info', 'El producto fue registrado con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos  =   Producto::find($id);
        $categories =   Categoria::all();
        $marcas     =   Marca::all();
        return view('inventario.productos.edit', compact('marcas','categories','productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoFormRequest $request,$id)
    {
        $Productos  =  Producto::find($id);
        $Productos->codigo          = $request->input('codigo');
        $Productos->nombre          = $request->input('nombre');
        $Productos->descripcion     = $request->input('descripcion');
        $Productos->stock           = $request->input('stock');
        $Productos->id_categoria    = $request->input('id_categoria');
        $Productos->id_marca        = $request->input('id_marca');
        
        $Productos->save();

        return redirect()->route('productos')->with('info', 'El producto fue actualizado con éxito');
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
        $productos = DB::table('productos as p')
                        ->join('categorias as c', 'p.id_categoria', '=', 'c.id')
                        ->join('marcas as m', 'p.id_marca', '=', 'm.id')
                        ->select('p.id','p.codigo','p.nombre','p.descripcion','p.stock','c.nombre as categoria','m.nombre as marca')
                        ->get();

        $pdf = PDF::loadView('inventario.productos.pdf.productospdf', compact('productos'));        

        return $pdf->stream('listado-productos.pdf');
    }
}
