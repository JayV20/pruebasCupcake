<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->bigIncrements('id');
            $table->integer('id_ciudad');
            $table->integer('id_alcaldia');
            $table->integer('id_tipo_usuario');
            $table->string('nombre');
            $table->string('app');
            $table->string('apm');
            $table->string('telefono');
            $table->string('contraseña');
            $table->string('email');
            $table->string('calle');
            $table->string('num_int');
            $table->string('num_ext');
            $table->string('coloia');
            $table->integer('cp');
            $table->boolean('aviso_privacidad');
            $table->timestamps();
            $table->foreign('id_ciudad')->references('id')->on('ciudads')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_alcaldia')->references('id')->on('alcaldias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_tipo_usuario')->references('id')->on('tipo_usuarios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
