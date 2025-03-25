<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class intercambio extends Model
{
    protected $fillable = [
        'estado_intercambio',
        'fecha_intercambio',
        'id_productosolicitado',
        'id_productoofrecido'
    ];
}
