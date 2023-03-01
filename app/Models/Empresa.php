<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    
}
