<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CorreoEmpresa extends Model
{
    use HasFactory;


    protected $casts = [
        'idCorreoEmpresa' => 'autoincrement',
        'correoEmpresa' => 'string',
        'idEmpresa' => 'integer',
    ];

    public function empresa() : BelongsTo
    {
        return $this->belongsTo(Empresa::class);
    }
}
