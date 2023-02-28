<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $casts = [
        'idCliente' => 'autoincrement',
        'nombreCliente' => 'string',
        'apPaternoCliente' => 'string',
        'apMaternoCliente' => 'string',
        'paisCliente' => 'string',
        'estadoCliente' => 'string',
        'ciudadCliente' => 'string',
        'calleCliente' => 'string',
        'noExteriorCliente' => 'string',
        'noInteriorCliente' => 'string',
        'codPostalCliente' => 'string',
        'fechaNacimientoCliente' => 'date',
        'emailCliente' => 'string',
        'contrasenaCliente' => 'string',
        'telefonoCliente' => 'string',
    ];

}
