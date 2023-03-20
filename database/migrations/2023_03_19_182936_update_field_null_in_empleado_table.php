<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->string('SegundoNombre',25)->nullable()->change();
            $table->string('TercerNombre',25)->nullable()->change();
            $table->string('SegundoApellido',25)->nullable()->change();
            $table->string('ApellidoMatrimonio',25)->nullable()->change();       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->string('SegundoNombre',25);
            $table->string('TercerNombre',25);
            $table->string('SegundoApellido',25);
            $table->string('ApellidoMatrimonio',25);
        });
    }
};
