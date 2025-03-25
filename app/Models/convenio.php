<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class convenio extends Model
{
    protected $fillable = [
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'id_usuario',
        'id_juego',
    ];
}
