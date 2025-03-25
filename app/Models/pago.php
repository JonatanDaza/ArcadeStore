<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pago extends Model
{
    protected $fillable = [
        'metodo_pago',
        'total',
        'id_pedido'
    ];
}
