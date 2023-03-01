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
        Schema::create('TelefonoEmpleado', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idEmpleado')->constrained('empleado')->onDelete('cascade');
            $table->string('telefonoEmpleado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TelefonoEmpleado');
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
};
