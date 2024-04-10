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
        Schema::create('persona', function (Blueprint $table) {
            $table->id();
            $table->string('id_familiar');
            $table->string('primer_Nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->date('fecha_nacimiento');
            $table->integer('id_departamento');
            $table->integer('id_estado_civil');
            $table->string('profesion')->nullable();
            $table->integer('id_religion');
            $table->string('dui')->nullable();
            $table->string('direccion_residencia');
            $table->string('acta_nacimiento_folio')->nullable();
            $table->string('acta_nacimiento_libro')->nullable();
            $table->string('acta_nacimiento_partida')->nullable();
            $table->string('acta_nacimiento_anio')->nullable();
            $table->string('acta_nacimiento_acaldia')->nullable();


            $table->foreign('id_departamento')->references('id')->on('ctl_departamento');
            $table->foreign('id_estado_civil')->references('id')->on('ctl_estado_civil');
            $table->foreign('id_religion')->references('id')->on('ctl_religion');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('persona');
    }
};
