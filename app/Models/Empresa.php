<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    use HasFactory;

    protected $casts = [
        'idEmpresa' => 'autoincrement',
        'nombreFiscalEmpresa' => 'string',
        'paisEmpresa' => 'string',
        'estadoEmpresa' => 'string',
        'ciudadEmpresa' => 'string',
        'calleEmpresa' => 'string',
        'noExteriorEmpresa' => 'string',
        'noInteriorEmpresa' => 'string',
        'codPostalEmpresa' => 'string',
        'rfcEmpresa' => 'string',
    ];

    public function correo() : HasMany
    {
        return $this->hasMany(CorreoEmpresa::class);
    }

    public function telefono() : HasMany
    {
        return $this->hasMany(TelefonoEmpresa::class);
    }
}
