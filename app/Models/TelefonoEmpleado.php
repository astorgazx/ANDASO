<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelefonoEmpleado extends Model
{
    use HasFactory;

    protected $table = 'TelefonoEmpleado';

    protected $casts = [
        'idTelefonoEmpleado' => 'autoincrement',
        'telefonoEmpleado' => 'string',
        'idEmpleado' => 'integer',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
