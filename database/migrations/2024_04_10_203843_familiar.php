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
            $table->integer('id_persona');
            $table->integer('id_parentesco');
            
            $table->foreign('id_persona')->references('id')->on('persona');
            $table->foreign('id_parentesco')->references('id')->on('ctl_parentesco');
         
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
