<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function productos()
    {
        return $this->belongsToMany(Productos::class);
    }

}
