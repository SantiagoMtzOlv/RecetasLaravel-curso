<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{

    protected $fillable = [
        'titulo', 'preparacion', 'ingredientes', 'imagen', 'categoria_id'
    ];
    // Obtiene la Categoria de la receta, via llave foranea
    public function categoria(){
        return $this->belongsTo(CategoriaReceta::class);
    }

    //Obtiene la info del User by Foreign Key
    public function autor(){
        return $this->belongsTo(User::class, 'user_id');
    }

    //Likes que tiene receta
    public function likes(){
        return $this->belongsToMany(User::class, 'likes_receta');
    }
}
