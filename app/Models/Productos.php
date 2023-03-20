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

    protected $fillable = [
        'idProducto',
        'nombreProducto',
        'noPiezaInterna',
        'precioProducto',
        'cantidadProducto',
        'descripcionProducto',
        // Se almacenara una imagen
        'dibujoProducto',
        'especificacionProducto',
    ];

    public function proveedor()
    {
        return $this->belongsToMany(Proveedor::class);
    }

    public function factura()
    {
        return $this->belongsToMany(Factura::class);
    }

    public function empleado()
    {
        return $this->belongsToMany(Empleado::class);
    }

}
