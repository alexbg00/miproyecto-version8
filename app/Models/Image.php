<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    // Relación de uno a muchos (Nos devuelve todos los comentarios de una imagen)
    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->orderBy('id', 'desc');
    }

    // Relación de uno a muchos (Nos devuelve todos los likes de una imagen)
    public function likes()
    {
        return $this->hasMany('App\Models\Like');
    }

    // Relación de muchos a uno (Nos devuelve el usuario dueño de la imagen)
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    
}
