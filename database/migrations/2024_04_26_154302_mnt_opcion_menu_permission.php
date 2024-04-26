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
        Schema::create('mnt_opcion_menu_permission', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('id_opcion_menu');
            $table->integer('permission_id');
            $table->foreign('id_opcion_menu')->references('id')->on('mnt_opcion_menu');
            $table->foreign('permission_id')->references('id')->on('permissions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mnt_opcion_menu_permission');
    }
};
