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
        Schema::create('juegos', function (Blueprint $table) {
            $table->id('id_juego');
            $table->string('titulo', 50);
            $table->double('precio');
            $table->text('descripcion');
            $table->text('requisitos_minimos');
            $table->text('requisitos_recomendados');
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('categorias')->on('id_categoria')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juegos');
    }
};
