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
        Schema::table('Proveedor', function (Blueprint $table) {
            //

            $table->string('nombreFiscalProveedor')->nullable();
            $table->string('paisProveedor')->nullable();
            $table->string('estadoProveedor')->nullable();
            $table->string('ciudadProveedor')->nullable();
            $table->string('calleProveedor')->nullable();
            $table->string('noExteriorProveedor')->nullable();
            $table->string('noInteriorProveedor')->nullable();
            $table->string('codPostalProveedor')->nullable();
            $table->string('rfcProveedor')->nullable();
            $table->string('immexProveedor')->nullable();
            $table->string('repaeProveedor')->nullable();
            $table->string('taxIDProveedor')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Proveedor', function (Blueprint $table) {

            $table->dropColumn('nombreFiscalProveedor');
            $table->dropColumn('paisProveedor');
            $table->dropColumn('estadoProveedor');
            $table->dropColumn('ciudadProveedor');
            $table->dropColumn('calleProveedor');
            $table->dropColumn('noExteriorProveedor');
            $table->dropColumn('noInteriorProveedor');
            $table->dropColumn('codPostalProveedor');
            $table->dropColumn('rfcProveedor');
            $table->dropColumn('immexProveedor');
            $table->dropColumn('repaeProveedor');
            $table->dropColumn('taxIDProveedor');
        });
    }
};
