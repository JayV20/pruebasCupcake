<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->bigIncrements('id');
            $table->integer('id_alcaldia');
            $table->integer('id_ciudad');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('calle');
            $table->string('num_int');
            $table->string('num_ext');
            $table->string('colonia');
            $table->integer('cp');
            $table->timestamps();
            
            $table->foreign('id_alcaldia')->references('id')->on('alcaldias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_ciudad')->references('id')->on('ciudads')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedors');
    }
}
