<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Permite autenticar el proveedor
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;




class Proveedor extends Model implements Authenticatable
{
    use HasFactory;
    use BasicAuthenticatable;

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

    protected $fillable = [
        'idProveedor',
        'nombreFiscalProveedor',
        'paisProveedor',
        'estadoProveedor',
        'ciudadProveedor',
        'calleProveedor',
        'noExteriorProveedor',
        'noInteriorProveedor',
        'codPostalProveedor',
        'rfcProveedor',
        'immexProveedor',
        'repaeProveedor',
        'taxIDProveedor',
    ];

    public function correo()
    {
        // El nombre la tabla de la base de datos es CorreoProv
        return $this->hasMany($related = CorreoProv::class);
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
