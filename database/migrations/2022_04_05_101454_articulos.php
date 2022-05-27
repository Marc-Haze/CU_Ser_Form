<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Articulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();        
            // Relación Articulo - Pedido
            $table->unsignedBigInteger('idPedido');
            $table->foreign('idPedido')
                ->references('id')
                ->on('pedidos')
                ->onDelete('cascade');
                  
            $table->string('articulo');
            $table->string('color')->nullable();
            $table->string('talla')->nullable();
            $table->string('descripcion')->nullable();;
            $table->string('codigoInterno');
            $table->string('ean')->nullable();
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
        Schema::dropIfExists('articulos');
    }
}
