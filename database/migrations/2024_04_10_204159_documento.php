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
        Schema::create('Documento', function (Blueprint $table) {
            $table->id();
            $table->string('parroquia');
            $table->integer('id_persona');
            $table->string('numero_tomo')->nullable();
            $table->string('numero_pagina')->nullable();
            $table->integer('id_tipo_documento');
            $table->string('comentarios',255)->nullable();
            $table->string('anio');
            $table->string('libro');

            $table->foreign('id_tipo_documento')->references('id')->on('ctl_documentos');
            $table->foreign('id_persona')->references('id')->on('persona');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Documento');
    }
};
