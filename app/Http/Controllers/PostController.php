<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Comentario;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $postArray = Post::select('post.titulo', 'categoria.nombre' , 'post.id' , 'post.contenido')
                ->join('categoria', 'post.Categorias_id', '=', 'categoria.id')
                ->get()->toArray();

        $categoria = Categoria::all();
        return  view('post.postHome')->with('postArray' , $postArray)->with('categoria' , $categoria);
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
        if(empty($request->post_categoria) || empty($request->post_titulo) || empty($request->post_contenido)){
            return json_encode('DATOS VACIOS');
           }
        $postSave = new Post();
        $postSave->Categorias_id = $request->post_categoria;
        $postSave->titulo = $request->post_titulo;
        $postSave->contenido = $request->post_contenido;
        $postSave->save();
        return redirect('api/PostHome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postEdit = Post::where("post.id","=", $id)
        ->select('post.titulo', 'categoria.nombre' , 'post.id' , 'post.contenido' , 'post.created_at')
        ->join('categoria', 'post.Categorias_id', '=', 'categoria.id')
        ->get();
        $postEdit = $postEdit[0];//Seleccionamos el primer datos del array - el primer ->fisrt()
        $comentario = Comentario::where("comentario.Post_id","=", $id)->get();

        return  view('post.editarPost')->with('postEdit' , $postEdit)->with('comentario' , $comentario);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if(empty($request->idPost) || empty($request->contenido)){
            return json_encode('DATOS VACIOS');
           }

        $updatePost = Post::where("id", $request->idPost)
        ->update(["contenido" =>  $request->contenido]);
        $response = Array('mensaje' => 'update' );
        return json_encode($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
