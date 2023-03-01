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
        Schema::create('empleado_administra_producto', function (Blueprint $table) {
            $table->foreignId('idEmpleado')->constrained('empleado')->onDelete('cascade');
            $table->foreignId('idProducto')->constrained('producto')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado_administra_producto');
    }


};
