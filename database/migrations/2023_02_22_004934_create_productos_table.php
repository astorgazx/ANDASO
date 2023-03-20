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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombreProducto');
            $table->string('noPiezaInterna');
            $table->float('precioProducto');
            $table->integer('cantidadProducto');
            $table->string('descripcionProducto');
            // Se almacenara una imagen
            $table->string('dibujoProducto');
            $table->string('especificacionProducto');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
