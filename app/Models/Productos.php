<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function proveedor()  : BelongsToMany
    {
        return $this->belongsToMany(Proveedor::class);
    }

    public function factura() : BelongsToMany
    {
        return $this->belongsToMany(Factura::class);
    }

    public function empleado() : BelongsToMany
    {
        return $this->belongsToMany(Empleado::class);
    }

}
