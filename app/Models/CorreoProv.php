<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorreoProv extends Model
{
    use HasFactory;

    protected $table = 'CorreoProv';

    protected $casts = [
        'idCorreoProv' => 'autoincrement',
        'correoProv' => 'string',
        'idProveedor' => 'integer',
    ];

    public function proveedor() : BelongsTo
    {
        return $this->belongsTo(Proveedor::class);
    }
}
