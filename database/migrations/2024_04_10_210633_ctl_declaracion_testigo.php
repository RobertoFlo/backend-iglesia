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
        Schema::create('declaracion_testigo', function (Blueprint $table) {
            $table->id();
            $table->integer('id_Persona');
            $table->integer('id_declaracion');
          
          
            $table->foreign('id_Persona')->references('id')->on('persona');
            $table->foreign('id_declaracion')->references('id')->on('Declaracion');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('declaracion_testigo');
    }
};
