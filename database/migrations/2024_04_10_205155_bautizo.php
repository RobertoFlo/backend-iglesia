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
        Schema::create('Bautizo', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_bautizo');
            $table->integer('id_Persona');
            $table->string('nombre_Parroco');
            $table->integer('id_documento');

            $table->foreign('id_Persona')->references('id')->on('persona');
            $table->foreign('id_documento')->references('id')->on('Documento');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Bautizo');
    }
};
