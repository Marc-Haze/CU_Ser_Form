<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pruebas extends Migration
{
    public function up()
    {
        Schema::create('pruebas', function (Blueprint $table) {
            $table->id();
            $table->string('dato1')->nullable();;
            $table->string('dato2')->nullable();;
            $table->string('dato3')->nullable();;
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('pruebas');
    }
}
