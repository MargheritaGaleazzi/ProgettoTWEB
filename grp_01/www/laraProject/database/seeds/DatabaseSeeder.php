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
            ['categoria' => 'amministratore', 'email' => 'giuseppe.santi3@mail.com', 'password' => 'giuseppino',
                'nome' => 'Giuseppe', 'cognome' => 'Santi', 'via' => 'Piagi', 'citta' => 'Ancona',
                'cap' => '60121', 'sesso' => 'M', 'cellulare' => '3556768542', 'nome_societa_organizzatrice' => Null],
            ['categoria' => 'organizzatore', 'email' => 'maria.cerrato@live.com', 'password' => 'mery88',
                'nome' => 'Maria', 'cognome' => 'Cerrato', 'via' => 'Donnola', 'citta' => 'Perugia',
                'cap' => '59439', 'sesso' => 'F', 'cellulare' => '3542047281', 'nome_societa_organizzatrice' => 'PartyLove'],
            ['categoria' => 'organizzatore', 'email' => 'marco.ferrero78@alice.com', 'password' => 'ferrero03',
                'nome' => 'Marco', 'cognome' => 'Ferrero', 'via' => 'Sudini', 'citta' => 'Roma',
                'cap' => '23918', 'sesso' => 'M', 'cellulare' => '3920173645', 'nome_societa_organizzatrice' => 'ConcertoPlanner'],
            ['categoria' => 'organizzatore', 'email' => 'aleale.gallo@dumbi.com', 'password' => 'Ale7685',
                'nome' => 'Alessandro', 'cognome' => 'Gallo', 'via' => 'Bindi', 'citta' => 'Firenze',
                'cap' => '38462', 'sesso' => 'M', 'cellulare' => '3924163529' , 'nome_societa_organizzatrice' => 'CasaDelConcerto'],
            ['categoria' => 'organizzatore', 'email' => 'francy.penna@outlook.it', 'password' => 'Francesca67',
                'nome' => 'Francesca', 'cognome' => 'Penna', 'via' => 'Londini', 'citta' => 'Bologna',
                'cap' => '49271', 'sesso' => 'F', 'cellulare' => '3684930603' , 'nome_societa_organizzatrice' => 'PrixeoEvents'],
            ['categoria' => 'organizzatore', 'email' => 'davide.amerio@mailco.it', 'password' => 'DavideAmerico78',
                'nome' => 'Davide', 'cognome' => 'Americo', 'via' => 'Ondina', 'citta' => 'Bari',
                'cap' => '69574', 'sesso' => 'M', 'cellulare' => '3283659409' , 'nome_societa_organizzatrice' => 'TheConcertoShoppe'],
            ['categoria' => 'cliente', 'email' => 'mario.bianchi@gmail.com', 'password' => 'mario123',
                'nome' => 'Mario', 'cognome' => 'Bianchi', 'via' => 'Monfalcone', 'citta' => 'Torino',
                'cap' => '10122', 'sesso' => 'M', 'cellulare' => '3355268759', 'nome_societa_organizzatrice' => Null],
            ['categoria' => 'cliente', 'email' => 'brendalina@alice.it', 'password' => 'brendiLina1234567',
                'nome' => 'Lina', 'cognome' => 'Brenda', 'via' => 'Bellaria', 'citta' => 'Roma',
                'cap' => '00127', 'sesso' => 'F', 'cellulare' => '3357220036', 'nome_societa_organizzatrice' => Null],
            ['categoria' => 'cliente', 'email' => 'gianni.roveri@gmail.com', 'password' => 'gGgG3030',
                'nome' => 'Gianni', 'cognome' => 'Roveri', 'via' => 'Degli abeti', 'citta' => 'Ancona',
                'cap' => '60131', 'sesso' => 'M', 'cellulare' => '3333620125', 'nome_societa_organizzatrice' => Null],
            ['categoria' => 'cliente', 'email' => 'bellkort@gmail.com', 'password' => 'bkioio25478',
                'nome' => 'Beleriana', 'cognome' => 'Kort', 'via' => 'Piccoli', 'citta' => 'Macerata',
                'cap' => '62100', 'sesso' => 'F', 'cellulare' => '3339996587', 'nome_societa_organizzatrice' => Null],
            ['categoria' => 'cliente', 'email' => 'maria.pia@alice.it', 'password' => 'MariaLaPia',
                'nome' => 'Maria Pia', 'cognome' => 'Rossi', 'via' => 'Verdi', 'citta' => 'Palermo',
                'cap' => '90128', 'sesso' => 'F', 'cellulare' => '3333332548', 'nome_societa_organizzatrice' => Null],
            
        ]);
        // $this->call(UsersTableSeeder::class);
         
        DB::table('evento')->insert([
            ['societa_organizzatrice' => 'PartyLove', 'prezzo_biglietto' => 35.00, 'data_ora' => '2021:08:17 20:15:00',
                'informazioni' => 'Emma Marrone torna in concerto con FortunaLive! Vieni anche tu ad ascoltarla dal vivo, una esperienza indimenticabile da vivere presso Unipol Arena a Casalecchio di Reno, il giorno 18 agosto 2021. Dai, ti aspettiamo!',
                'titolo' => 'FortunaLive', 'totale_biglietti_evento' => 22000, 'biglietti_rimanenti' => 22000, 
                'coordinate_maps' => 'https://www.google.com/maps/place/Unipol+Arena/@44.4860382,11.2481098,17z/data=!3m1!4b1!4m5!3m4!1s0x477fd68911c059af:0x84c9dbd8d81468cf!8m2!3d44.4860382!4d11.2481098',
                'luogo' => 'Emilia Romagna', 'locandina' => 'emmafortuna.jpg'],
            ['societa_organizzatrice' => 'ConcertoPlanner', 'prezzo_biglietto' => 100.00, 'data_ora' => '2021:07:03 21:30:00',
                'informazioni' => 'Vasco torna in concerto con NonStopLive! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso Autodromo Internazionale Enzo e Dino Ferrari ad Imola, il giorno 3 luglio 2021. Dai, ti aspettiamo!',
                'titolo' => 'NonStopLive', 'totale_biglietti_evento' => 40000, 'biglietti_rimanenti' => 40000, 
                'coordinate_maps' => 'https://www.google.com/maps/place/Autodromo+Enzo+e+Dino+Ferrari/@44.3440738,11.7143509,17z/data=!3m1!4b1!4m5!3m4!1s0x132b4a7474d71167:0x81177e3551c217a6!8m2!3d44.3439681!4d11.7143121',
                'luogo' => 'Emilia Romagna', 'locandina' => 'vasco.jpg'],
            ['societa_organizzatrice' => 'CasaDelConcerto', 'prezzo_biglietto' => 150.00, 'data_ora' => '2022:03:23 18:45:00',
                'informazioni' => 'The Weeknd torna in concerto con AfterHours! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso Mediolanum Forum ad Assago, il giorno 23 marzo 2022. Dai, ti aspettiamo!',
                'titolo' => 'AfterHours', 'totale_biglietti_evento' => 10000, 'biglietti_rimanenti' => 10000, 
                'coordinate_maps' => 'https://www.google.com/maps/place/Mediolanum+Forum/@45.401644,9.1420511,17z/data=!4m5!3m4!1s0x4786c3087f24ab5d:0x6cbf33cb191a7f9b!8m2!3d45.401644!4d9.1420511',
                'luogo' => 'Lombardia', 'locandina' => 'theweeknd.jpg'],
            ['societa_organizzatrice' => 'PrixeoEvents', 'prezzo_biglietto' => 50.00, 'data_ora' => '2022:05:31 21:00:00',
                'informazioni' => 'Tommaso Paradiso torna in concerto con Sulle Nuvole Tour! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso Palazzo del Turismo a Jesolo, il giorno 31 maggio 2022. Dai, ti aspettiamo!',
                'titolo' => 'Sulle Nuvole Tour', 'totale_biglietti_evento' => 7000, 'biglietti_rimanenti' => 7000, 
                'coordinate_maps' => 'https://www.google.com/maps/place/PalaInvent+Jesolo/@45.5023828,12.6310097,17z/data=!3m1!4b1!4m5!3m4!1s0x477c00846740cca5:0x1a83d21d67f7401d!8m2!3d45.5023828!4d12.6310097',
                'luogo' => 'Veneto', 'locandina' => 'tommasoparadiso.jpg'],
            ['societa_organizzatrice' => 'TheConcertoShoppe', 'prezzo_biglietto' => 30.00, 'data_ora' => '2021:08:11 21:00:00',
                'informazioni' => 'Carl Brave torna in concerto! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso Arena di Verona, il giorno 11 agosto 2021. Dai, ti aspettiamo!',
                'titolo' => 'Carl Brave', 'totale_biglietti_evento' => 13000, 'biglietti_rimanenti' => 13000, 
                'coordinate_maps' => 'https://www.google.com/maps/place/Verona+Arena/@45.4389958,10.9943574,17z/data=!3m1!4b1!4m5!3m4!1s0x477f5f4675b6a4fb:0x972d445bd29ff3f5!8m2!3d45.4389958!4d10.9943574',
                'luogo' => 'Veneto', 'locandina' => 'carlbrave.jpg'],
            
        ]);
        
        DB::table('biglietto')->insert([
            ['codice_biglietto' => 1, 'codice_utente' => 7, 'codice_evento' => 1, 'metodo_pagamento' => 'bonifico', 'data_acquisto' => '2020:07:04 09:23:57', 'prezzo_acquisto' => 35.00],
            ['codice_biglietto' => 2, 'codice_utente' => 7, 'codice_evento' => 1, 'metodo_pagamento' => 'bonifico', 'data_acquisto' => '2020:07:04 09:25:37', 'prezzo_acquisto' => 35.00],
            ['codice_biglietto' => 1, 'codice_utente' => 7, 'codice_evento' => 2, 'metodo_pagamento' => 'paypal', 'data_acquisto' => '2020:05:19 12:24:56', 'prezzo_acquisto' => 100.00],
        ]);
    }
}
