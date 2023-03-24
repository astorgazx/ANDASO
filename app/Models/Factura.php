<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Factura extends Model
{
    use HasFactory;



    protected $casts = [
        'idFactura' => 'autoincrement',
        'fechaFactura' => 'date',
        'horaFactura' => 'time',
        'totalFactura' => 'float',
        'idCliente' => 'integer',
        'idEmpresa' => 'integer',
        'conceptoFactura' => 'string',
        'subTotalFactura' => 'float',
        'reciboPago' => 'string',
        'metodoPago' => 'ENUM', // Paypall, MercadoPago,

    ];

    protected $fillable = [
        'fechaFactura',
        'horaFactura',
        'totalFactura',
        'idCliente',
        'idEmpresa',
        'conceptoFactura',
        'subTotalFactura',
        'reciboPago',
        'metodoPago',
    ];


    public function cliente() : BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }

    public function empresa() : BelongsTo
    {
        return $this->belongsTo(Empresa::class);
    }

    public function productos() : BelongsToMany
    {
        return $this->belongsToMany(Productos::class);
    }

}
