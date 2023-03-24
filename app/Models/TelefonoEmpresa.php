<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class TelefonoEmpresa extends Model
{
    use HasFactory;

    protected $table = 'TelefonoEmpresa';

    protected $casts = [
        'idTelefonoEmpresa' => 'autoincrement',
        'telefonoEmpresa' => 'string',
        'idEmpresa' => 'integer',
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
