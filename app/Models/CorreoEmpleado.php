<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorreoEmpleado extends Model
{
    use HasFactory;

    protected $table = 'CorreoEmpleado';

    protected $casts = [
        'idCorreoEmpleado' => 'autoincrement',
        'correoEmpleado' => 'string',
        'idEmpleado' => 'integer',
    ];

    public function empleado() : BelongsTo
    {
        return $this->belongsTo(Empleado::class);
    }

}
