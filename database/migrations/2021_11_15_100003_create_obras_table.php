<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('obras', function (Blueprint $table) {
            $table->bigIncrements('idObra');
            $table->integer('idProprietario')->unsigned();
            //$table->foreign('idProprietario')->references('idProprietario')->on('proprietarios');
            $table->string('endereco');
            $table->double('area');
            $table->enum('tipo',['W','A','M']); //W - Madeira; A - Alvenaria; M - Mista;
            $table->string('alvara');
            $table->string('habite_se');
            $table->boolean('entregue');
            $table->date('data_lancamento');
            $table->integer('idVistoria')->unsigned();
            //$table->foreign('idVistoria')->references('idVistoria')->on('vistorias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obras');
    }
}
