<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Estampados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estampados', function (Blueprint $table) {
            $table->id();
            // Relación Estampado - T.Trabajo
            $table->unsignedBigInteger('idTrabajo');
            $table->foreign('idTrabajo')
                ->references('id')
                ->on('trabajos')
                ->onDelete('cascade');

            $table->string('referencia');
            $table->integer('unidades');
            $table->float('precioUnd');
            $table->float('importeTotal');
            $table->string('observaciones');

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
        Schema::dropIfExists('estampados');
    }
}
