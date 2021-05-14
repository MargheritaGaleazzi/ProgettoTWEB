<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faq')->insert([
            ['id_faq' => 1, 'domanda' => 'Quali sono i metodi di pagamento accettati?', 'risposta' => 'Accettiamo pagamento con carte di cedito o PayPal.'],
            ['id_faq' => 2, 'domanda' => 'Posso comprare più di un biglietto?', 'risposta' => 'Certamente, non ci sono limiti al numero di biglietti acquistabili (ovviamente fino ad esaurimento scorte).'],
            ['id_faq' => 3, 'domanda' => 'Quali sono i criteri di ricerca dei prodotti in vendita applicabili?', 'risposta' => 'Dal sito Bigliettone è possibile effettuare una ricerca semplice o ricerca avanzata. La ricerca semplice può essere effettuata utilizzando la barra di ricerca. La ricerca avanzata può essere effettuata applicando i filtri.'],
            ['id_faq' => 4, 'domanda' => 'Come faccio a registrarmi al sito?', 'risposta' => 'Nella barra di navigazione in alto basta cliccare sul link di Log-In e procedere con la registrazione guidata.'],
            ['id_faq' => 5, 'domanda' => 'Cosa bisogna fare per acquistare sul sito?', 'risposta' => 'E’ indispensabile essere registrati sul sito Bigliettone o registrarsi subito prima del processo di acquisto, come utenti.'],
            ['id_faq' => 6, 'domanda' => 'Posso vedere i biglietti precedentemente acquistati?', 'risposta' => 'Certamente, basterà accedere alla propria area riservata, dove sarà disponibile un link che rimanda allo storico dei biglietti acquistati.'],
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
