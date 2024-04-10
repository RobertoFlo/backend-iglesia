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
        Schema::create('Familiar', function (Blueprint $table) {
            $table->id();
            $table->string('id_Persona');
            $table->string('id_Parentesco');
            
            $table->foreign('id_Persona')->references('id')->on('ctl_departamento');
            $table->foreign('id_Parentesco')->references('id')->on('ctl_parentesco');
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Familiar');
    }
};
