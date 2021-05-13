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
            $table->string('societa_organizzatrice',30);
            $table->float('prezzo_biglietto');
            $table->tinyInteger('biglietto_scontato');
            $table->integer('sconto');
            $table->timestamp('data_ora');
            $table->string('informazioni',2500);
            $table->string('titolo',40);
            $table->integer('totale_biglietti_evento');
            $table->integer('biglietti_rimanenti');
            $table->string('coordinate_maps',2500);
            $table->string('luogo',50);
            $table->enum('stato_evento',['aperto','chiuso'])->default('aperto');
            $table->text('locandina');
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
