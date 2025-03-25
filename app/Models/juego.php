<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class juego extends Model
{
    protected $fillable = [
        'titulo',
        'precio',
        'descripcion',
        'requisitos_minimos',
        'requisitos_recomendados',
        'id_categoria'
    ];
}
