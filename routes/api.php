<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Categoria
Route::get('CategoriaHome',[CategoriaController::class, 'index']) ->name('api/categoria');
Route::POST('CategoriaSave',[CategoriaController::class, 'store'])->name('api/CategoriaSave');
Route::POST('deleteCategoria/{id}',[CategoriaController::class, 'destroy'])->name('api/deleteCategoria');
Route::POST('consultarCategoria',[CategoriaController::class, 'show']);
Route::POST('updateCategoria',[CategoriaController::class, 'update']);
//Post
Route::get('PostHome',[PostController::class, 'index']) ->name('api/post');
Route::POST('PostSave',[PostController::class, 'store'])->name('api/PostSave');
Route::POST('UpdatePost',[PostController::class, 'update'])->name('api/UpdatePost');
Route::get('editPost/{id}',[PostController::class, 'show']);


//Comentario
Route::POST('ComentarioSave',[ComentarioController::class, 'store'])->name('api/ComentarioSave');
Route::POST('deleteComentario/{id}',[ComentarioController::class, 'destroy'])->name('api/deleteComentario');





