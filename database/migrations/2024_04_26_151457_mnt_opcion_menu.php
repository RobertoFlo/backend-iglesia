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
        //
        Schema::create('mnt_opcion_menu', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nombre',150)->nullable();
            $table->string('path',255);
            $table->string('icono',150);
            $table->boolean('mostrar')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::drop('mnt_opcion_menu');
    }
};
