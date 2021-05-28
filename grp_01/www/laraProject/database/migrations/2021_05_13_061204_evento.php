<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Evento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table){
            $table->bigIncrements('codice_evento')->unsigned()->index();
            $table->string('societa_organizzatrice',40)->nullable();
            $table->float('prezzo_biglietto')->nullable();
            $table->tinyInteger('biglietto_scontato')->default(0)->nullable();
            $table->integer('sconto')->nullable();
            $table->timestamp('data_ora')->nullable();
            $table->string('informazioni',2500)->nullable();
            $table->string('titolo',40)->nullable();
            $table->integer('totale_biglietti_evento')->nullable();
            $table->integer('biglietti_rimanenti')->nullable();
            $table->string('coordinate_maps',2500)->nullable();
            $table->string('luogo',100)->nullable();
            $table->enum('stato_evento',['aperto','chiuso'])->default('aperto')->nullable();
            $table->text('locandina')->nullable()->nullable();
            $table->string('programma_evento',2500)->nullable();
            $table->string('indicazioni',2500)->nullable();
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
}
