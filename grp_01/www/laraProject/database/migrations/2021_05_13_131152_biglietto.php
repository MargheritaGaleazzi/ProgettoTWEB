<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Biglietto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biglietto', function (Blueprint $table){
            $table->bigInteger('codice_biglietto');
            $table->string('codice_utente',30)->index();
            $table->foreign('codice_utente')->references('codice_utente')->on('utente');
            $table->bigInteger('codice_evento')->unsigned()->index();
            $table->foreign('codice_evento')->references('codice_evento')->on('evento');
            $table->enum('metodo_pagamento',['bonifico','carta di credito'])->default('carta di credito');
            $table->timestamp('data_acquisto');
            $table->float('prezzo_acquisto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biglietto');
    }
}
