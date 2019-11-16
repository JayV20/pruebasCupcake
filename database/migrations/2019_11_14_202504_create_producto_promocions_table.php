<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoPromocionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_promocions', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->integer('id_producto');
            $table->integer('id_promocion');
            $table->integer('descuento');
            $table->timestamps();
            
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_promocion')->references('id')->on('promocions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_promocions');
    }
}
