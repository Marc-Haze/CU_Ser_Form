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
            // Relación Articulo - Prenda
            $table->unsignedBigInteger('idPrenda');
            $table->foreign('idPrenda')
                ->references('id')
                ->on('prendas')
                ->onDelete('cascade');
            
            $table->string('referencia');
            $table->integer('color');
            $table->integer('talla');
            $table->integer('cantidad');
            $table->integer('colorEstamapdo');
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
