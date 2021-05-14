<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Utente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utente', function (Blueprint $table){
            $table->string('codice_utente',30)->primary();
            $table->enum('categoria',['cliente','organizzatore','amministratore']);
            $table->string('email',40);
            $table->string('password',30);
            $table->string('nome',30);
            $table->string('cognome',30);
            $table->string('via',30)->nullable();
            $table->string('citta',40)->nullable();
            $table->integer('cap')->nullable();
            $table->string('sesso')->nullable();
            $table->string('cellulare',10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
