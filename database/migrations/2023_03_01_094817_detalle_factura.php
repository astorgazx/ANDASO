<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_factura', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idFactura')->constrained('factura')->onDelete('cascade');
            $table->foreignId('idProducto')->constrained('producto')->onDelete('cascade');
            $table->integer('cantidad');
            $table->float('costoTotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_factura');
    }

    public function factura()
    {
        return $this->belongsToMany(Factura::class);
    }

    public function producto()
    {
        return $this->belongsToMany(Producto::class);
    }
};
