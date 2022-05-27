<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('cif_nif');
            $table->string('razonSocial')->nullable();
            $table->string('nombreComercial');
            $table->string('telefono');
            $table->string('email');
            $table->string('domicilio')->nullable();
            $table->string('codigoPostal')->nullable();
            $table->string('municipio')->nullable();
            $table->string('provincia')->nullable();
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
