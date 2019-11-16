<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion_entregas', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->integer('id_pedido');
            $table->integer('id_alcaldia');
            $table->integer('id_ciudad');
            $table->string('calle');
            $table->string('num_int');
            $table->string('num_ext');
            $table->string('colonia');
            $table->integer('cp');
            $table->timestamps();
            $table->foreign('id_pedido')->refrences('id')->on('pedidos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_alcaldia')->refrences('id')->on('alcaldias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cuidad')->refrences('id')->on('ciudads')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direccion_entregas');
    }
}
