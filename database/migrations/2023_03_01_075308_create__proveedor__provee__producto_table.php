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
        Schema::create('_proveedor__provee__producto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idProveedor')->constrained('Proveedor')->onDelete('cascade');
            $table->foreignId('idProducto')->constrained('Producto')->onDelete('cascade');
            $table->string('noPiezaExterna');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_proveedor__provee__producto');
    }
};
