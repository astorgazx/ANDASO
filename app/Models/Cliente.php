<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;




class Cliente extends Model
{
    use HasFactory;

    protected $guard = ['idCliente'];

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

    protected $hidden = [
        'contrasenaCliente',
    ];

    public function getAuthPassword()
    {

        return $this->contrasenaCliente;
    }

}
