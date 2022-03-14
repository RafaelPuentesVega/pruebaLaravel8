<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria =  Categoria::all();

        return  view('categoria.categoriaHome')->with('categoria' , $categoria);
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
        if(empty($request->categoria_nombre)){
            return json_encode('DATOS VACIOS');
        }
        $categoria = new Categoria();
        $categoria->nombre = $request->categoria_nombre;
        $categoria->save();
        return redirect('api/CategoriaHome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $categoriaFind =  Categoria::where('id', '=', $request->id)->get()->toArray();
      // dd($categoria);
        $response = Array('mensaje' => 'ok' );
        $response['data'] =$categoriaFind;
        return json_encode($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(empty($request->nombre)){
            return json_encode('DATOS VACIOS');
        }
        $updateCategoria = Categoria::where("id", $request->id)
        ->update(["nombre" =>  $request->nombre]);
        $response = Array('mensaje' => 'update' );
        return json_encode($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::whereid($id);
        $categoria->delete();
        return redirect('api/CategoriaHome')->with('status', 'Categoria Ha sido eliminada');
    }
}
