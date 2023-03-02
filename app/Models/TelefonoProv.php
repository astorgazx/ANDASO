<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelefonoProv extends Model
{
    use HasFactory;

    protected $table = 'TelefonoProv';

    protected $casts = [
        'idTelefonoProv' => 'autoincrement',
        'telefonoProv' => 'string',
        'idProveedor' => 'integer',
    ];

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }
}
