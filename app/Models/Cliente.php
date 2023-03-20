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

    protected $fillable = [
        'idCliente',
        'nombreCliente',
        'apPaternoCliente',
        'apMaternoCliente',
        'paisCliente',
        'estadoCliente',
        'ciudadCliente',
        'calleCliente',
        'noExteriorCliente',
        'noInteriorCliente',
        'codPostalCliente',
        'fechaNacimientoCliente',
        'emailCliente',
        'contrasenaCliente',
        'telefonoCliente',
    ];

    public function getAuthPassword()
    {

        return $this->contrasenaCliente;
    }

}
