<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoCotizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_cotizacions', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->integer('id_producto');
            $table->integer('id_cotizacion');
            $table->integer('cantidad');
            $table->timestamps();
            
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cotizacion')->references('id')->on('cotizacions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_cotizacions');
    }
}
