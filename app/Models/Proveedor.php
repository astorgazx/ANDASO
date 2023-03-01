<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'Proveedor';

    protected $casts = [
        'idProveedor' => 'autoincrement',
        'nombreFiscalProveedor' => 'string',
        'paisProveedor' => 'string',
        'estadoProveedor' => 'string',
        'ciudadProveedor' => 'string',
        'calleProveedor' => 'string',
        'noExteriorProveedor' => 'string',
        'noInteriorProveedor' => 'string',
        'codPostalProveedor' => 'string',
        'rfcProveedor' => 'string',
        'immexProveedor' => 'string',
        'repaeProveedor' => 'string',
        'taxIDProveedor' => 'string',
    ];

    public function correo()
    {
        return $this->hasMany(CorreoProv::class);
    }
    public function telefono()
    {
        return $this->hasMany(TelefonoProv::class);
    }
    public function productos()
    {
        return $this->belongsToMany(Productos::class);
    }
}
