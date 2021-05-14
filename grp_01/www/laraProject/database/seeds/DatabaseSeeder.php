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
            ['id_faq' => 1, 'domanda' => 'Quali sono i metodi di pagamento accettati?', 'risposta' => 'Accettiamo pagamento con carte di credito, PayPal e bonifico.'],
            ['id_faq' => 2, 'domanda' => 'Posso comprare più di un biglietto?', 'risposta' => 'Certamente, non ci sono limiti al numero di biglietti acquistabili (ovviamente fino ad esaurimento scorte).'],
            ['id_faq' => 3, 'domanda' => 'Quali sono i criteri di ricerca dei prodotti in vendita applicabili?', 'risposta' => 'Dal sito Bigliettone è possibile effettuare una ricerca semplice o ricerca avanzata. La ricerca semplice può essere effettuata utilizzando la barra di ricerca. La ricerca avanzata può essere effettuata applicando i filtri.'],
            ['id_faq' => 4, 'domanda' => 'Come faccio a registrarmi al sito?', 'risposta' => 'Nella barra di navigazione in alto basta cliccare sul link di Log-In e procedere con la registrazione guidata.'],
            ['id_faq' => 5, 'domanda' => 'Cosa bisogna fare per acquistare sul sito?', 'risposta' => 'E’ indispensabile essere registrati sul sito Bigliettone o registrarsi subito prima del processo di acquisto, come utenti.'],
            ['id_faq' => 6, 'domanda' => 'Posso vedere i biglietti precedentemente acquistati?', 'risposta' => 'Certamente, basterà accedere alla propria area riservata, dove sarà disponibile un link che rimanda allo storico dei biglietti acquistati.'],
        ]);
        
        DB::table('utente')->insert([
            ['categoria' => 'amministratore', 'email' => 'giuseppe.santi3@mail.com', 'password'=>'giuseppino',
                'nome'=>'Giuseppe', 'cognome'=>'Santi', 'via'=>'Piagi', 'citta'=>'Ancona',
                'cap'=>'60121','sesso'=>'uomo','cellulare'=>'3556768542'],
            ['categoria' => 'cliente', 'email' => 'mario.bianchi@gmail.com', 'password'=>'mario123',
                'nome'=>'Mario', 'cognome'=>'Bianchi', 'via'=>'Monfalcone', 'citta'=>'Torino',
                'cap'=>'10122','sesso'=>'uomo','cellulare'=>'3355268759'],
            ['categoria' => 'cliente', 'email' => 'brendalina@alice.it', 'password'=>'brendiLina1234567',
                'nome'=>'Lina', 'cognome'=>'Brenda', 'via'=>'Bellaria', 'citta'=>'Roma',
                'cap'=>'00127','sesso'=>'donna','cellulare'=>'3357220036'],
            ['categoria' => 'cliente', 'email' => 'gianni.roveri@gmail.com', 'password'=>'gGgG3030',
                'nome'=>'Gianni', 'cognome'=>'Roveri', 'via'=>'Degli abeti', 'citta'=>'Ancona',
                'cap'=>'60131','sesso'=>'uomo','cellulare'=>'3333620125'],
            ['categoria' => 'cliente', 'email' => 'bellkort@gmail.com', 'password'=>'bkioio25478',
                'nome'=>'Beleriana', 'cognome'=>'Kort', 'via'=>'Piccoli', 'citta'=>'Macerata',
                'cap'=>'62100','sesso'=>'donna','cellulare'=>'3339996587'],
            ['categoria' => 'cliente', 'email' => 'maria.pia@alice.it', 'password'=>'MariaLaPia',
                'nome'=>'Maria Pia', 'cognome'=>'Rossi', 'via'=>'Verdi', 'citta'=>'Palermo',
                'cap'=>'90128','sesso'=>'donna','cellulare'=>'3333332548'],
            
        ]);
        // $this->call(UsersTableSeeder::class);
        
        DB::table('evento')->insert([
            ['societa_organizzatrice' => 'PartyLove', 'prezzo_biglietto' => 35.00, 'data_ora' => '2021:08:17 20:15:00',
                'informazioni' => 'Emma torna in concerto! Vieni anche tu ad ascoltarla dal vivo, una esperienza indimenticabile', 'titolo' => 'FortunaLive', 'totale_biglietti_evento' => 50000, 'biglietti_rimanenti' => 50000, 
                'coordinate_maps' => 'https://www.google.com/maps/place/Unipol+Arena/@44.4860382,11.2481098,17z/data=!3m1!4b1!4m5!3m4!1s0x477fd68911c059af:0x84c9dbd8d81468cf!8m2!3d44.4860382!4d11.2481098',
                'luogo' => 'Unipol Arena - CASALECCHIO DI RENO'],
            ['societa_organizzatrice' => 'ConcertoPlanner', 'prezzo_biglietto' => 100.00, 'data_ora' => '2021:07:03 21:30:00',
                'informazioni' => 'descrizione', 'titolo' => 'NonStopLive', 'totale_biglietti_evento' => 40000, 'biglietti_rimanenti' => 40000, 
                'coordinate_maps' => 'https://www.google.com/maps/place/Autodromo+Enzo+e+Dino+Ferrari/@44.3440738,11.7143509,17z/data=!3m1!4b1!4m5!3m4!1s0x132b4a7474d71167:0x81177e3551c217a6!8m2!3d44.3439681!4d11.7143121',
                'luogo' => 'Autodromo Internazionale Enzo e Dino Ferrari - IMOLA'],
            ['societa_organizzatrice' => 'ConcertoPlanner', 'prezzo_biglietto' => 100.00, 'data_ora' => '2021:07:03 21:30:00',
                'informazioni' => 'descrizione', 'titolo' => 'NonStopLive', 'totale_biglietti_evento' => 40000, 'biglietti_rimanenti' => 40000, 
                'coordinate_maps' => 'https://www.google.com/maps/place/Autodromo+Enzo+e+Dino+Ferrari/@44.3440738,11.7143509,17z/data=!3m1!4b1!4m5!3m4!1s0x132b4a7474d71167:0x81177e3551c217a6!8m2!3d44.3439681!4d11.7143121',
                'luogo' => 'Autodromo Internazionale Enzo e Dino Ferrari - IMOLA'],
            
        ]);
        
        DB::table('biglietto')->insert([
            ['codice_biglietto' => 1, 'codice_utente' => 2, 'codice_evento' => 1, 'metodo_pagamento' => 'bonifico', 'data_acquisto' => '2020:07:04 09:23:57', 'prezzo_acquisto' => 35.00, 'qrcode' => '1.jpg'],
            ['codice_biglietto' => 2, 'codice_utente' => 2, 'codice_evento' => 1, 'metodo_pagamento' => 'bonifico', 'data_acquisto' => '2020:07:04 09:25:37', 'prezzo_acquisto' => 35.00, 'qrcode' => '2.jpg'],
            ['codice_biglietto' => 1, 'codice_utente' => 2, 'codice_evento' => 2, 'metodo_pagamento' => 'paypal', 'data_acquisto' => '2020:05:19 12:24:56', 'prezzo_acquisto' => 100.00, 'qrcode' => '3.jpg'],
        ]);
    }
}
