<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaPrimaProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_prima_proveedors', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->integer('id_proveedor');
            $table->integer('id_materia_prima');
            $table->integer('cantidad');
            $table->timestamps();
            
            $table->foreign('id_proveedor')->references('id')->on('proveedors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_materia_prima')->references('id')->on('materia_primas')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materia_prima_proveedors');
    }
}
