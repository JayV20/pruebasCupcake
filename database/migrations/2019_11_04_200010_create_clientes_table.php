<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usuario');
            $table->string('pass');
            $table->string('nombre_cliente');
            $table->string('app');
            $table->string('apm');
            $table->string('correo')->unique();
            $table->integer('telefono');
            $table->integer('id_direccion');
            $table->timestamps();
            
            //referenciamos la foreign key
            $table->foreign('id_direccion')->references('id')->on('direccions')->onDelete('cascade')->onUpdate('cascade');
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
