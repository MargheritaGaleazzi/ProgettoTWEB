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
        
        DB::table('utente')->insert([
            ['codice_utente' => 1, 'categoria' => 'cliente', 'email' => 'mario.bianchi@gmail.com', 'password'=>'mario123',
                'nome'=>'Mario', 'cognome'=>'Bianchi', 'via'=>'Monfalcone', 'citta'=>'Torino',
                'cap'=>'10122','sesso'=>'uomo','cellulare'=>'3355268759'],
            ['codice_utente' => 2, 'categoria' => 'cliente', 'email' => 'brendalina@alice.it', 'password'=>'brendiLina1234567',
                'nome'=>'Lina', 'cognome'=>'Brenda', 'via'=>'Bellaria', 'citta'=>'Roma',
                'cap'=>'00127','sesso'=>'donna','cellulare'=>'3357220036'],
            ['codice_utente' => 3, 'categoria' => 'cliente', 'email' => 'gianni.roveri@gmail.com', 'password'=>'gGgG3030',
                'nome'=>'Gianni', 'cognome'=>'Roveri', 'via'=>'Degli abeti', 'citta'=>'Ancona',
                'cap'=>'60131','sesso'=>'uomo','cellulare'=>'3333620125'],
            ['codice_utente' => 4, 'categoria' => 'cliente', 'email' => 'bellkort@gmail.com', 'password'=>'bkioio25478',
                'nome'=>'Beleriana', 'cognome'=>'Kort', 'via'=>'Piccoli', 'citta'=>'Macerata',
                'cap'=>'62100','sesso'=>'donna','cellulare'=>'3339996587'],
            ['codice_utente' => 5, 'categoria' => 'cliente', 'email' => 'maria.pia@alice.it', 'password'=>'MariaLaPia',
                'nome'=>'Maria Pia', 'cognome'=>'Rossi', 'via'=>'Verdi', 'citta'=>'Palermo',
                'cap'=>'90128','sesso'=>'donna','cellulare'=>'3333332548'],
            
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
