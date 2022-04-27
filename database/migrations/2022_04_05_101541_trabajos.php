<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trabajos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajos', function (Blueprint $table) {
            $table->id();
            // Relación T.Trabajo - Pedido
            $table->unsignedBigInteger('idPedido');
            $table->foreign('idPedido')
                ->references('id')
                ->on('pedidos')
                ->onDelete('cascade');

            $table->string('tipoTrabajo');
            $table->string('referencia');
            $table->string('descripcion');
            $table->string('pvp');
            $table->string('igic');
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
        Schema::dropIfExists('trabajos');
    }
}
