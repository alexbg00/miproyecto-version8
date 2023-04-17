<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    // Relación de muchos a uno (Nos devuelve el usuario dueño del comentario)
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    // Relación de muchos a uno (Nos devuelve la imagen dueña del comentario)
    public function image()
    {
        return $this->belongsTo('App\Models\Image', 'image_id');

    }
}
