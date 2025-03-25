<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    protected $fillable = [
        'fecha_venta',
        'id_usuario',
        'id_juego'
    ];
}
