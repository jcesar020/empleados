<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Empleado;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educaciones', function (Blueprint $table) {
            $table->id();
            

            $table->unsignedBigInteger('IdEmpleado');
            $table->foreign('IdEmpleado')->references('id')->on('empleados');

            $table->unsignedBigInteger('IdCarreraProfesional');
            $table->foreign('IdCarreraProfesional')->references('id')->on('carreras');

            $table->unsignedBigInteger('IdEstadoEducacion');
            $table->foreign('IdEstadoEducacion')->references('id')->on('estado_educacions');

            $table->boolean('Vigente');

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
        Schema::dropIfExists('educaciones');
    }
};
