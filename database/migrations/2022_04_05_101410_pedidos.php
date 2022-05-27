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
            $table->id(); //Debe no ser autoincremental
            // Relación Pedido - Cliente
            $table->string('idCliente');
            $table->foreign('idCliente')
                ->references('id')
                ->on('clientes')
                ->onDelete('cascade');
            $table->string('fechaPedido')->nullable();
            $table->string('fechaTerminacion')->nullable();
            $table->string('creacion');
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
