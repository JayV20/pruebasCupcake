<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacion_usuarios', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->integer('id_cotizacion');
            $table->integer('id_usuario');
            $table->timestamps();
            
            $table->foreign('id_cotizacion')->references('id')->on('cotizacions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizacion_usuarios');
    }
}
