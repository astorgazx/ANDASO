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
        //
        Schema::create('CorreoEmpresa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idEmpresa')->constrained('Empresa')->onDelete('cascade');
            $table->string('correoEmpresa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('CorreoEmpresa');
    }
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
};
