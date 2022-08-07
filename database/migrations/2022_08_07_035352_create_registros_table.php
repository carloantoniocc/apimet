<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('dispositivo_id')->unsigned();
            $table->double('temperatura', 8, 2)->nullable();
            $table->double('humedad', 8, 2)->nullable();
            $table->double('presion_atmosferica', 8, 2)->nullable();
            $table->double('velocidad_viento', 8, 2)->nullable();
            $table->timestamps();

            $table->foreign('dispositivo_id')->references('id')->on('dispositivos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
