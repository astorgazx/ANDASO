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

            $table->string('nombreFiscalProveedor');
            $table->string('paisProveedor');
            $table->string('estadoProveedor');
            $table->string('ciudadProveedor');
            $table->string('calleProveedor');
            $table->string('noExteriorProveedor');
            $table->string('noInteriorProveedor');
            $table->string('codPostalProveedor');
            $table->string('rfcProveedor');
            $table->string('immexProveedor');
            $table->string('repaeProveedor');
            $table->string('taxIDProveedor');


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
