<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Empleado extends Model
{
    use HasFactory;

    protected $casts = [
        'idEmpleado' => 'autoincrement',
        'nombreEmpleado' => 'string',
        'apPaternoEmpleado' => 'string',
        'apMaternoEmpleado' => 'string',
        'paisEmpleado' => 'string',
        'estadoEmpleado' => 'string',
        'ciudadEmpleado' => 'string',
        'calleEmpleado' => 'string',
        'noExteriorEmpleado' => 'string',
        'noInteriorEmpleado' => 'string',
        'codPostalEmpleado' => 'string',
        'fechaNacimientoEmpleado' => 'date',
        'generoEmpleado' => 'ENUM', // Hombre, Mujer, Otro
        'nssEmpleado' => 'string',
        'dniEmpleado' => 'string',
        'fechaIngresoEmpleado' => 'date',
        'activoEmpleado' => 'boolean',
        'usuarioEmpleado' => 'string',
        'contrasenaEmpleado' => 'string',
    ];
    protected $hidden = [
        'contrasenaEmpleado',
    ];

    protected $fillable = [
        'idEmpleado',
        'nombreEmpleado',
        'apPaternoEmpleado',
        'apMaternoEmpleado',
        'paisEmpleado',
        'estadoEmpleado',
        'ciudadEmpleado',
        'calleEmpleado',
        'noExteriorEmpleado',
        'noInteriorEmpleado',
        'codPostalEmpleado',
        'fechaNacimientoEmpleado',
        'generoEmpleado',
        'nssEmpleado',
        'dniEmpleado',
        'fechaIngresoEmpleado',
        'activoEmpleado',
        'usuarioEmpleado',
        'contrasenaEmpleado',
    ];

    public function correo() : HasMany
    {
        return $this->hasMany(CorreoEmpleado::class);
    }

    public function telefono() : HasMany
    {
        return $this->hasMany(TelefonoEmpleado::class);
    }

    public function productos() : BelongsToMany
    {
        return $this->belongsToMany(Productos::class);
    }

}
