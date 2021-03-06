<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $table = "comentario";
    protected $fillable =[
        'Post_id',
        'contenido'
    ];
    public function posts()
    {
        return $this->belongsTo('App\Models\Post_id');
    }
}
