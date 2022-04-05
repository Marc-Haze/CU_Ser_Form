<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            // Relación Pedido - Cliente
            $table->unsignedBigInteger('idCliente');
            $table->foreign('idCliente')
                ->references('id')
                ->on('clientes')
                ->onDelete('cascade');

            // Relación Pedido - Articulo
            $table->unsignedBigInteger('idArticulo');
            $table->foreign('idArticulo')
                ->references('id')
                ->on('articulos')
                ->onDelete('cascade');

            // Relación Pedido - Estampado
            $table->unsignedBigInteger('idEstampado');
            $table->foreign('idEstampado')
                ->references('id')
                ->on('estampados')
                ->onDelete('cascade');

            $table->integer('numeroPedido');
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
        Schema::dropIfExists('pedidos');
    }
}
