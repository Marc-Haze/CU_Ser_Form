<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prendas', function (Blueprint $table) {
            $table->id();
            // Relación Prenda - Pedido
            $table->unsignedBigInteger('idPedido');
            $table->foreign('idPedido')
                ->references('id')
                ->on('pedidos')
                ->onDelete('cascade');
            
            $table->string('tipoPrenda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prendas');
    }
}
