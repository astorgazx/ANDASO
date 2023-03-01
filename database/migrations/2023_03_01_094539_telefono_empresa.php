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
        Schema::create('TelefonoEmpresa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idEmpresa')->constrained('Empresa')->onDelete('cascade');
            $table->string('telefonoEmpresa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TelefonoEmpresa');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
};
