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
        Schema::create('Confirma', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_confirma');
            $table->integer('id_Persona');
            $table->string('nombre_Parroco');
            $table->string('padrino')->nullable();
            $table->string('madrina')->nullable();
            $table->string('parroquia_bautizo');
           
            $table->foreign('id_Persona')->references('id')->on('persona');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Confirma');
    }
};
