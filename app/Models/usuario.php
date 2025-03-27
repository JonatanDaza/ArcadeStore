<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $fillable = [
        'Nombre_completo',
        'correo',
        'nick',
        'telefono',
        'contraseña',
        'tipo'
    ];

    protected $hidden =[
        'contraseña'
    ];

    public function getAuthPassword()
    {
        return $this->contraseña;
    }

    public $timestamps = false;
}
