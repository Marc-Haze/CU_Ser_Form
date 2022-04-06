<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posicions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posicions', function (Blueprint $table) {
            $table->id();
            // Relación Posicion - Cliente
            $table->unsignedBigInteger('idCliente');
            $table->foreign('idCliente')
                ->references('id')
                ->on('clientes')
                ->onDelete('cascade');
            
            $table->string('posicion');
            $table->string('otros')->nullable();
            $table->string('imagen')->nullable();
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
        Schema::dropIfExists('posicions');
    }
}
