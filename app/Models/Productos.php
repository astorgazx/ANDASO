<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $casts = [
        'idProducto' => 'autoincrement',
        'nombreProducto' => 'string',
        'noPiezaInterna' => 'string',
        'precioProducto' => 'float',
        'cantidadProducto' => 'integer',
        'descripcionProducto' => 'string',
        // Se almacenara una imagen
        'dibujoProducto' => 'string',
        'especificacionProducto' => 'string',
    ];

    public function proveedor()
    {
        return $this->belongsToMany(Proveedor::class);
    }

}
