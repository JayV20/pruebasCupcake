<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinatariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinatarios', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->integer('num_pedido');
            $table->string('nombre');
            $table->string('app');
            $table->string('apm');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->timestamps();
            
            $table->foreign('num_pedido')->references('id')->on('pedidos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinatarios');
    }
}
