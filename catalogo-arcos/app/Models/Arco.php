<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arco extends Model
{
    protected $fillable = [
        'nombre',
        'tipo',
        'descripcion',
        'imagen',
        'curiosidad',
        'imagen_curiosidad',
    ];
}
