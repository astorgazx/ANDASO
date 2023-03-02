<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Permite autenticar el cliente
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;




class Cliente extends Model implements Authenticatable
{
    use HasFactory;
    use BasicAuthenticatable;

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

    public function findForAuthentication($emailCliente)
    {
        return $this->where('emailCliente', $emailCliente)->first();
    }

}
