<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromocionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocions', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->string('img_promo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promocions');
    }
}
