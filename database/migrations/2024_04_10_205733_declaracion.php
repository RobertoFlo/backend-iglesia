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
        Schema::create('Declaracion', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_declaracion');
            $table->date('fecha_celebracion');
            $table->integer('id_persona');
            $table->string('numero_expediente');
            $table->integer('id_documento');
          
            $table->foreign('id_persona')->references('id')->on('persona');
            $table->foreign('id_documento')->references('id')->on('Documento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Declaracion');
    }
};
