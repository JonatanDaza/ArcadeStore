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
        Schema::create("pagos", function (Blueprint $table) {
            $table->id('id_pago'); 
            $table->string('metodo_de_pago', 11);
            $table->integer('total');
            $table->unsignedBigInteger('id_pedido');
            $table->timestamps();

            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos');            
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
