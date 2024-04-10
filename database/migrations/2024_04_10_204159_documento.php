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
            $table->integer('id_Persona');
            $table->string('numero_Tomo')->nullable();
            $table->string('numero_Pagina')->nullable();
            $table->integer('id_tipo_documento');
            $table->string('comentarios',255)->nullable();
            $table->string('anio');
            $table->string('libro');

            $table->integer('id_tipo_documento')->references('id')->on('ctl_documento');
            $table->foreign('id_Persona')->references('id')->on('persona');

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
