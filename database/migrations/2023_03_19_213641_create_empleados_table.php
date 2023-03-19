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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('PrimerNombre',25);
            $table->string('SegundoNombre',25);
            $table->string('TercerNombre',25);
            $table->string('PrimerApellido',25);
            $table->string('SegundoApellido',25);
            $table->string('ApellidoMatrimonio',25);
            $table->enum('Genero',[
                'F', 'M', 'O'
            ], 'M');
            $table->date('FechaNacimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
