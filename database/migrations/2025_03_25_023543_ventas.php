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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('id_venta');
            $table->date('fecha_venta');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_juego');
            $table->timestamps();

            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_juego')->references('id_juego')->on('juegos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
