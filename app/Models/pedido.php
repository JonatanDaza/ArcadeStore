<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $fillable = [
        'fechapedido',
        'estadopedido',
        'id_usuario',
        'id_juego'
    ];
}
