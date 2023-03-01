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
        Schema::create('telefonoProv', function (Blueprint $table) {
            $table->id();
            $table->string('telefono');
            $table->foreignId('idProveedor')->constrained('Proveedor')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telefonoProv');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }
};
