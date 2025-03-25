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
        Schema::create('intercambios', function (Blueprint $table) {
            $table->id('id_intercambio');
            $table->string('estado_intercambio', 100);
            $table->date('fecha_intercambio');
            $table->unsignedBigInteger('id_productosolicitado');
            $table->unsignedBigInteger('id_productoofrecido');
            $table->timestamps();
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
