<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "post";
    protected $fillable =[
        'Categoria_id',
        'titulo',
        'contenido'
    ];
    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }
    public function comentario()
    {
        return $this->hasMany('App\Models\Comentario');
    }
}
