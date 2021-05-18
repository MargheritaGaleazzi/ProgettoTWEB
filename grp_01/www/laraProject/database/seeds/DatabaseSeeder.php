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
        
        /*
        DB::table('utente')->insert([
           
            ['categoria' => 'amministratore', 'email' => 'giuseppe.santi3@mail.com', 'username' => '', 'password' => 'giuseppino',
                'email_verified_at' => Null, 'nome' => 'Giuseppe', 'cognome' => 'Santi', 'via' => 'Piagi', 'citta' => 'Ancona',
                'cap' => '60121', 'sesso' => 'M', 'cellulare' => '3556768542', 'nome_societa_organizzatrice' => Null],
            ['categoria' => 'organizzatore', 'email' => 'partylove@live.com', 'username' => '', 'password' => 'mery88',
                'email_verified_at' => Null, 'nome' => Null, 'cognome' => Null, 'via' => 'Donnola', 'citta' => 'Perugia',
                'cap' => '59439', 'sesso' => Null, 'cellulare' => '3542047281', 'nome_societa_organizzatrice' => 'PartyLove'],
            ['categoria' => 'organizzatore', 'email' => 'concerto.planner@alice.com', 'username' => '', 'password' => 'ferrero03',
                'email_verified_at' => Null, 'nome' => Null, 'cognome' => Null, 'via' => 'Sudini', 'citta' => 'Roma',
                'cap' => '23918', 'sesso' => Null, 'cellulare' => '3920173645', 'nome_societa_organizzatrice' => 'ConcertoPlanner'],
            ['categoria' => 'organizzatore', 'email' => 'casadelconcerto@dumbi.com', 'username' => '', 'password' => 'Ale7685',
                'email_verified_at' => Null, 'nome' => Null, 'cognome' => Null, 'via' => 'Bindi', 'citta' => 'Firenze',
                'cap' => '38462', 'sesso' => Null, 'cellulare' => '3924163529' , 'nome_societa_organizzatrice' => 'CasaDelConcerto'],
            ['categoria' => 'organizzatore', 'email' => 'prixeo.events12@outlook.it', 'username' => '', 'password' => 'Francesca67',
                'email_verified_at' => Null, 'nome' => Null, 'cognome' => Null, 'via' => Null, 'citta' => 'Bologna',
                'cap' => '49271', 'sesso' => Null, 'cellulare' => '3684930603' , 'nome_societa_organizzatrice' => 'PrixeoEvents'],
            ['categoria' => 'organizzatore', 'email' => 'theconcertoshoppe@mailco.it', 'username' => '', 'password' => 'DavideAmerico78',
                'email_verified_at' => Null, 'nome' => Null, 'cognome' => Null, 'via' => 'Ondina', 'citta' => 'Bari',
                'cap' => '69574', 'sesso' => Null, 'cellulare' => '3283659409' , 'nome_societa_organizzatrice' => 'TheConcertoShoppe'],
            ['categoria' => 'cliente', 'email' => 'mario.bianchi@gmail.com', 'username' => '', 'password' => 'mario123',
                'email_verified_at' => Null, 'nome' => 'Mario', 'cognome' => 'Bianchi', 'via' => 'Monfalcone', 'citta' => 'Torino',
                'cap' => '10122', 'sesso' => 'M', 'cellulare' => '3355268759', 'nome_societa_organizzatrice' => Null],
            ['categoria' => 'cliente', 'email' => 'brendalina@alice.it', 'username' => '', 'password' => 'brendiLina1234567',
                'email_verified_at' => Null, 'nome' => 'Lina', 'cognome' => 'Brenda', 'via' => 'Bellaria', 'citta' => 'Roma',
                'cap' => '00127', 'sesso' => 'F', 'cellulare' => '3357220036', 'nome_societa_organizzatrice' => Null],
            ['categoria' => 'cliente', 'email' => 'gianni.roveri@gmail.com', 'username' => '', 'password' => 'gGgG3030',
                'email_verified_at' => Null, 'nome' => 'Gianni', 'cognome' => 'Roveri', 'via' => 'Degli abeti', 'citta' => 'Ancona',
                'cap' => '60131', 'sesso' => 'M', 'cellulare' => '3333620125', 'nome_societa_organizzatrice' => Null],
            ['categoria' => 'cliente', 'email' => 'bellkort@gmail.com', 'username' => '', 'password' => 'bkioio25478',
                'email_verified_at' => Null, 'nome' => 'Beleriana', 'cognome' => 'Kort', 'via' => 'Piccoli', 'citta' => 'Macerata',
                'cap' => '62100', 'sesso' => 'F', 'cellulare' => '3339996587', 'nome_societa_organizzatrice' => Null],
            ['categoria' => 'cliente', 'email' => 'maria.pia@alice.it', 'username' => '', 'password' => 'MariaLaPia',
                'email_verified_at' => Null, 'nome' => 'Maria Pia', 'cognome' => 'Rossi', 'via' => 'Verdi', 'citta' => 'Palermo',
                'cap' => '90128', 'sesso' => 'F', 'cellulare' => '3333332548', 'nome_societa_organizzatrice' => Null],
            
        ]);
         * 
         */
        
         
        DB::table('evento')->insert([
            ['societa_organizzatrice' => 'ConcertoPlanner', 'prezzo_biglietto' => 100.00, 'biglietto_scontato' => 0, 'sconto' => 25, 'data_ora' => '2021:07:03 21:30:00',
                'informazioni' => 'Vasco torna in concerto con NonStopLive! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso Autodromo Internazionale Enzo e Dino Ferrari ad Imola, il giorno 3 luglio 2021. Dai, ti aspettiamo!',
                'titolo' => 'NonStopLive', 'totale_biglietti_evento' => 4000, 'biglietti_rimanenti' => 4000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2853.339630991969!2d11.712162215520328!3d44.34407377910367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132b4a7474d71167%3A0x81177e3551c217a6!2sAutodromo%20Enzo%20e%20Dino%20Ferrari!5e0!3m2!1sit!2sit!4v1621159580971!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Emilia Romagna', 'stato_evento' => 'aperto', 'locandina' => 'vasco.jpg',
                'programma_evento' => 'Nella mattinata del giorno 3 luglio 2021, a partire dalle ore 10, il personale della struttura che ospita l evento controllera i biglietti e fara entrare a scaglioni i partecipanti. A partire dalle ore 15, iniziera la diretta della radio Buonasera direttamente sul palco. Alle ore 21 il concerto verra aperto da Annalisa, nota cantante italiana. La durata prevista del concerto è di circa tre ore, con un numero di circa venticinque esibizioni.',
                'indicazioni' => 'È possibile raggiungere Imola sia in auto (prendendo l autostrada A14 Bologna-Taranto), sia in treno (la stazione di imola dista 2 km dalla struttura). È possibile inoltre raggiungere la localita anche in aereo, con meta presso l aeroporto di Bologna o Forli, che distano da Imola rispettivamente 35km e 30 km (da qui è possibile poi prendere una navetta che porta fino alla struttura).'],
            ['societa_organizzatrice' => 'CasaDelConcerto', 'prezzo_biglietto' => 170.00, 'biglietto_scontato' => 0, 'sconto' => 30, 'data_ora' => '2021:07:10 20:45:00',
                'informazioni' => 'John Legend torna in concerto! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso Piazza Napoleone a Lucca, il giorno 10 luglio 2021. Dai, ti aspettiamo!',
                'titolo' => 'John Legend', 'totale_biglietti_evento' => 10000, 'biglietti_rimanenti' => 10000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.6956196270157!2d10.502908999999999!3d43.841408799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d5838a16d74ecb%3A0x975f20ba2efb457e!2sP.za%20Napoleone%2C%2055100%20Lucca%20LU!5e0!3m2!1sen!2sit!4v1621339438325!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Toscana', 'stato_evento' => 'aperto', 'locandina' => 'john_legend.jpg',
                'programma_evento' => 'Nella mattinata del giorno 10 luglio 2021, a partire dalle ore 09:30, il personale della struttura che ospita l evento controllera i biglietti e fara entrare a scaglioni i partecipanti. A partire dalle ore 14, iniziera la diretta della radio ConNoi direttamente sul palco. Alle ore 20 il concerto verra aperto da Ed Sheeran, noto cantante irlandese. La durata prevista del concerto è di circa due ore ore e mezza, con un numero di circa venti esibizioni.',
                'indicazioni' => 'È possibile raggiungere Lucca sia in auto (prendendo autostrada A11 Firenze Mare, A11 Lucca - Viareggio, A12 Genova - Rosignano - Versilia - Lucca), sia in treno (scendendo presso la stazione ferroviaria di Lucca). È possibile inoltre raggiungere la localita anche in aereo, con meta presso aeroporto di Pisa o Firenze, che distano da Imola rispettivamente 20km e 80 km (da qui è possibile poi prendere una navetta che porta fino alla struttura).'],
            ['societa_organizzatrice' => 'PrixeoEvents', 'prezzo_biglietto' => 130.00, 'biglietto_scontato' => 0, 'sconto' => 20, 'data_ora' => '2021:08:07 21:40:00',
                'informazioni' => 'James Blunt torna in concerto con Once upon a mind Tour! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso Forte Arena a Cagliari, il giorno 7 agosto 2021. Dai, ti aspettiamo!',
                'titolo' => 'Once upon a mind Tour', 'totale_biglietti_evento' => 70000, 'biglietti_rimanenti' => 70000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d49642.9846034525!2d8.850429549999998!3d38.953988949999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sForte%20Arena%2C%20Santa%20Margherita%20di%20Pula%20SS%20195%20km%2039600%2C%2009100%20CAGLIARI%20%2C%20Italia!5e0!3m2!1sen!2sit!4v1621339745900!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Sardegna', 'stato_evento' => 'aperto', 'locandina' => 'james_blunt.jpg',
                'programma_evento' => 'Nella mattinata del giorno 7 agosto 2021, a partire dalle ore 09:40, il personale della struttura che ospita l evento controllera i biglietti e fara entrare a scaglioni i partecipanti. A partire dalle ore 14:30, iniziera la diretta della radio 110 direttamente sul palco. Alle ore 20:10 il concerto verra aperto da Ariana Grande, nota cantante statunitense. La durata prevista del concerto è di circa tre ore e mezza, con un numero di circa trenta esibizioni.',
                'indicazioni' => 'È possibile raggiungere Cagliari sia in nave (attraverso diverse navi giornaliere provenienti da Genova, Civitavecchia, Napoli, Trapani e Palermo), sia in treno (scendendo presso la stazione ferroviaria di Cagliari). È possibile inoltre raggiungere la localita anche in aereo, con meta presso l aeroporto internazionale di Elmas, che dista da Cagliari 3 km (da qui è possibile poi prendere una navetta che porta fino alla struttura).'],
            ['societa_organizzatrice' => 'TheConcertoShoppe', 'prezzo_biglietto' => 30.00, 'biglietto_scontato' => 0, 'sconto' => 30, 'data_ora' => '2021:08:11 21:00:00',
                'informazioni' => 'Carl Brave torna in concerto! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso Arena di Verona, il giorno 11 agosto 2021. Dai, ti aspettiamo!',
                'titolo' => 'Carl Brave', 'totale_biglietti_evento' => 13000, 'biglietti_rimanenti' => 13000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2799.5289667432207!2d10.992168715556563!3d45.438995779100644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477f5f4675b6a4fb%3A0x972d445bd29ff3f5!2sArena%20di%20Verona!5e0!3m2!1sit!2sit!4v1621159695321!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Veneto', 'stato_evento' => 'aperto', 'locandina' => 'carlbrave.jpg',
                'programma_evento' => 'Nella mattinata del giorno 11 agosto 2021, a partire dalle ore 09:20, il personale della struttura che ospita l evento controllera i biglietti e fara entrare a scaglioni i partecipanti. A partire dalle ore 15, iniziera la diretta della radio Emma direttamente sul palco. Alle ore 20:30 il concerto verra aperto da Franco126, cantante italiano. La durata prevista del concerto è di circa due ore e mezza, con un numero di circa venti esibizioni.',
                'indicazioni' => 'È possibile raggiungere Verona sia in auto (attraverso l autostrada A4 e A22), sia in treno (scendendo presso la stazione ferroviaria di Verona). È possibile inoltre raggiungere la localita anche in aereo, con meta presso l aeroporto di Verona VALERIO CATULLO, che dista da Verona 12 km (da qui è possibile poi prendere una navetta che porta fino alla struttura).'],
            ['societa_organizzatrice' => 'PartyLove', 'prezzo_biglietto' => 35.00, 'biglietto_scontato' => 0, 'sconto' => 10, 'data_ora' => '2021:08:17 20:15:00',
                'informazioni' => 'Emma Marrone torna in concerto con FortunaLive! Vieni anche tu ad ascoltarla dal vivo, una esperienza indimenticabile da vivere presso Unipol Arena a Casalecchio di Reno, il giorno 18 agosto 2021. Dai, ti aspettiamo!',
                'titolo' => 'FortunaLive', 'totale_biglietti_evento' => 22000, 'biglietti_rimanenti' => 22000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2846.421075088596!2d11.245921115487306!3d44.486038179101556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fd68911c059af%3A0x84c9dbd8d81468cf!2sUnipol%20Arena!5e0!3m2!1sit!2sit!4v1621159142587!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Emilia Romagna', 'stato_evento' => 'aperto', 'locandina' => 'emmafortuna.jpg',
                'programma_evento' => 'Nella mattinata del giorno 17 agosto 2021, a partire dalle ore 09:00, il personale della struttura che ospita l evento controllera i biglietti e fara entrare a scaglioni i partecipanti. A partire dalle ore 14, iniziera la diretta della radio Luisa direttamente sul palco. Alle ore 19:30 il concerto verra aperto da Alessandra Amoroso, nota cantante italiana. La durata prevista del concerto è di circa tre ore, con un numero di circa venticinque esibizioni.',
                'indicazioni' => 'È possibile raggiungere Casalecchio di Reno sia in auto (attraverso l autostrada A1), sia in treno (scendendo presso la stazione ferroviaria di Casalecchio di Reno). È possibile inoltre raggiungere la localita anche in aereo, con meta presso l aeroporto di Bologna Guglielmo Marconi, che dista da Casalecchio di Reno 25 km (da qui è possibile poi prendere una navetta che porta fino alla struttura).'],
            ['societa_organizzatrice' => 'TheConcertoShoppe', 'prezzo_biglietto' => 70.00, 'biglietto_scontato' => 0, 'sconto' => 30, 'data_ora' => '2021:09:21 21:00:00',
                'informazioni' => 'Sfera Ebbasta torna in concerto con Famoso Tour! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso PalaAlpitour a Torino, il giorno 21 settembre 2021. Dai, ti aspettiamo!',
                'titolo' => 'Famoso Tour', 'totale_biglietti_evento' => 20000, 'biglietti_rimanenti' => 20000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2819.155753626733!2d7.652555199999999!3d45.0420611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478812d37b5ad5f9%3A0xc05f27f42924d78!2sPala%20Alpitour!5e0!3m2!1sen!2sit!4v1621324134985!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Piemonte', 'stato_evento' => 'aperto', 'locandina' => 'sfera_ebbasta.jpg'],
            ['societa_organizzatrice' => 'ConcertoPlanner', 'prezzo_biglietto' => 80.00, 'biglietto_scontato' => 0, 'sconto' => 25, 'data_ora' => '2021:10:05 19:30:00',
                'informazioni' => 'I Moda tornano in concerto con Testa o Croce Tour! Vieni anche tu ad ascoltarli dal vivo, una esperienza indimenticabile da vivere presso PalaSele ad Eboli, il giorno 5 ottobre 2021. Dai, ti aspettiamo!',
                'titolo' => 'Testa o Croce Tour', 'totale_biglietti_evento' => 12000, 'biglietti_rimanenti' => 12000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028.858137373065!2d15.0583412!3d40.6109535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133960750b8f03cf%3A0xdcffd5de515c6019!2sPalaSele!5e0!3m2!1sen!2sit!4v1621327263740!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Campania', 'stato_evento' => 'aperto', 'locandina' => 'moda.jpg'],
            ['societa_organizzatrice' => 'TheConcertoShoppe', 'prezzo_biglietto' => 40.00, 'biglietto_scontato' => 0, 'sconto' => 14, 'data_ora' => '2021:10:14 21:30:00',
                'informazioni' => 'I Pinguini Tattici Nucleari tornano in concerto! Vieni anche tu ad ascoltarli dal vivo, una esperienza indimenticabile da vivere presso Kioene Arena a Padova, il giorno 14 ottobre 2021. Dai, ti aspettiamo!',
                'titolo' => 'Pinguini Tattici Nucleari', 'totale_biglietti_evento' => 18000, 'biglietti_rimanenti' => 18000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2800.570515349583!2d11.9226548!3d45.417999599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477edabbee13145b%3A0x714ccdfbd62caf79!2sKioene%20Arena!5e0!3m2!1sen!2sit!4v1621327683494!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Veneto', 'stato_evento' => 'aperto', 'locandina' => 'ptn.jpg'],
            ['societa_organizzatrice' => 'PrixeoEvents', 'prezzo_biglietto' => 30.00, 'biglietto_scontato' => 0, 'sconto' => 20, 'data_ora' => '2021:11:05 21:00:00',
                'informazioni' => 'Franco126 torna in concerto! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso Mediolanum Forum ad Assago, il giorno 5 novembre 2021. Dai, ti aspettiamo!',
                'titolo' => 'Franco126', 'totale_biglietti_evento' => 7000, 'biglietti_rimanenti' => 7000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2801.3816001269633!2d9.1420511!3d45.401644000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c3087f24ab5d%3A0x6cbf33cb191a7f9b!2sMediolanum%20Forum!5e0!3m2!1sen!2sit!4v1621324232392!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Lombardia', 'stato_evento' => 'aperto', 'locandina' => 'franco126.jpg'],
            ['societa_organizzatrice' => 'CasaDelConcerto', 'prezzo_biglietto' => 28.00, 'biglietto_scontato' => 0, 'sconto' => 12, 'data_ora' => '2021:11:09 20:45:00',
                'informazioni' => 'Michele Bravi torna in concerto con La Geografia del Buio Tour! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso Campus Industry Music a Parma, il giorno 9 novembre 2021. Dai, ti aspettiamo!',
                'titolo' => 'AfterHours', 'totale_biglietti_evento' => 10000, 'biglietti_rimanenti' => 10000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2832.7057904203016!2d10.326979599999998!3d44.766414600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47806b44bea9f355%3A0x364c59f2a213b688!2sCampus%20Music%20Industry!5e0!3m2!1sen!2sit!4v1621328535641!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Emilia Romagna', 'stato_evento' => 'aperto', 'locandina' => 'michele_bravi.jpg'],
            ['societa_organizzatrice' => 'ConcertoPlanner', 'prezzo_biglietto' => 60.00, 'biglietto_scontato' => 0, 'sconto' => 35, 'data_ora' => '2021:11:12 20:30:00',
                'informazioni' => 'I Negramaro tornano in concerto! Vieni anche tu ad ascoltarli dal vivo, una esperienza indimenticabile da vivere presso PalaRossini ad Ancona, il giorno 12 novembre 2021. Dai, ti aspettiamo!',
                'titolo' => 'Negramaro', 'totale_biglietti_evento' => 4000, 'biglietti_rimanenti' => 4000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2890.9223205737776!2d13.5266827!3d43.566501699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d806f5756df13%3A0x8ef17379d83fe7a6!2sPalaRossini!5e0!3m2!1sen!2sit!4v1621324311532!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Marche', 'stato_evento' => 'aperto', 'locandina' => 'negramaro.jpg'],
            ['societa_organizzatrice' => 'TheConcertoShoppe', 'prezzo_biglietto' => 50.00, 'biglietto_scontato' => 0, 'sconto' => 14, 'data_ora' => '2021:11:24 21:30:00',
                'informazioni' => 'Le Vibrazioni tornano in concerto! Vieni anche tu ad ascoltarli dal vivo, una esperienza indimenticabile da vivere presso Teatro Metropolitan a Catania, il giorno 24 novembre 2021. Dai, ti aspettiamo!',
                'titolo' => 'Le Vibrazioni', 'totale_biglietti_evento' => 2000, 'biglietti_rimanenti' => 2000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.9130227622063!2d15.084646899999996!3d37.5099695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1313e32b566715bf%3A0x287d01412c4fad90!2sTeatro%20Metropolitan!5e0!3m2!1sen!2sit!4v1621329826119!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Sicilia', 'stato_evento' => 'aperto', 'locandina' => 'vibrazioni.jpg'],
            ['societa_organizzatrice' => 'PrixeoEvents', 'prezzo_biglietto' => 38.00, 'biglietto_scontato' => 0, 'sconto' => 24, 'data_ora' => '2021:12:03 21:00:00',
                'informazioni' => 'Madame torna in concerto! Vieni anche tu ad ascoltarla dal vivo, una esperienza indimenticabile da vivere presso Atlantico a Roma, il giorno 3 dicembre 2021. Dai, ti aspettiamo!',
                'titolo' => 'Madame', 'totale_biglietti_evento' => 35000, 'biglietti_rimanenti' => 35000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2973.5160377287652!2d12.463014053925919!3d41.81718499297793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13258b168cb6d4df%3A0xd5f4a505185328a5!2sAtlantico!5e0!3m2!1sen!2sit!4v1621328947215!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Lazio', 'stato_evento' => 'aperto', 'locandina' => 'madame.jpg'],
            ['societa_organizzatrice' => 'ConcertoPlanner', 'prezzo_biglietto' => 65.00, 'biglietto_scontato' => 0, 'sconto' => 15, 'data_ora' => '2021:12:20 21:00:00',
                'informazioni' => 'Massimo Ranieri torna in concerto con Oggi è un altro giorno! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso Teatro delle Muse ad Ancona, il giorno 20 dicembre 2021. Dai, ti aspettiamo!',
                'titolo' => 'Oggi è un altro giorno', 'totale_biglietti_evento' => 2000, 'biglietti_rimanenti' => 2000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.393167008274!2d13.5099!3d43.6191752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d7fbca3c34835%3A0x1d86dde2f0e9af7a!2sTeatro%20delle%20Muse!5e0!3m2!1sen!2sit!4v1621329355826!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Marche', 'stato_evento' => 'aperto', 'locandina' => 'massimo_ranieri.jpg'],
            ['societa_organizzatrice' => 'PartyLove', 'prezzo_biglietto' => 48.00, 'biglietto_scontato' => 0, 'sconto' => 20, 'data_ora' => '2022:03:08 21:20:00',
                'informazioni' => 'Alvaro Soler torna in concerto con Magia European Tour! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso Fabrique a Milano, il giorno 8 marzo 2022. Dai, ti aspettiamo!',
                'titolo' => 'Magia European Tour', 'totale_biglietti_evento' => 20000, 'biglietti_rimanenti' => 20000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2798.8706116192534!2d9.252014099999998!3d45.45226339999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c5e032986f8f%3A0x811f52503f99511e!2sFabrique!5e0!3m2!1sen!2sit!4v1621339023466!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Lombardia', 'stato_evento' => 'aperto', 'locandina' => 'alvaro_soler.jpg'],
            ['societa_organizzatrice' => 'CasaDelConcerto', 'prezzo_biglietto' => 150.00, 'biglietto_scontato' => 0, 'sconto' => 40, 'data_ora' => '2022:03:23 18:45:00',
                'informazioni' => 'The Weeknd torna in concerto con AfterHours! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso Mediolanum Forum ad Assago, il giorno 23 marzo 2022. Dai, ti aspettiamo!',
                'titolo' => 'AfterHours', 'totale_biglietti_evento' => 10000, 'biglietti_rimanenti' => 10000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2801.381600126964!2d9.1420511!3d45.401644!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c3087f24ab5d%3A0x6cbf33cb191a7f9b!2sMediolanum%20Forum!5e0!3m2!1sit!2sit!4v1621159626986!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Lombardia', 'stato_evento' => 'aperto', 'locandina' => 'theweeknd.jpg'],
            ['societa_organizzatrice' => 'PartyLove', 'prezzo_biglietto' => 60.00, 'biglietto_scontato' => 0, 'sconto' => 20, 'data_ora' => '2022:03:31 21:15:00',
                'informazioni' => 'I Maneskin tornano in concerto! Vieni anche tu ad ascoltarli dal vivo, una esperienza indimenticabile da vivere presso Nelson Mandela Forum a Firenze, il giorno 31 marzo 2022. Dai, ti aspettiamo!',
                'titolo' => 'Maneskin', 'totale_biglietti_evento' => 20000, 'biglietti_rimanenti' => 20000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2880.777804586464!2d11.284713!3d43.777471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a546e71d9e16b%3A0xefe2db84d606fd6a!2sNelson%20Mandela%20Forum!5e0!3m2!1sen!2sit!4v1621324392187!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Toscana', 'stato_evento' => 'aperto', 'locandina' => 'maneskin.jpg'],
            ['societa_organizzatrice' => 'PartyLove', 'prezzo_biglietto' => 55.00, 'biglietto_scontato' => 0, 'sconto' => 23, 'data_ora' => '2022:05:03 19:15:00',
                'informazioni' => 'I OneRepublic tornano in concerto! Vieni anche tu ad ascoltarli dal vivo, una esperienza indimenticabile da vivere presso Kioene Arena a Padova, il giorno 3 maggio 2022. Dai, ti aspettiamo!',
                'titolo' => 'OneRepublic', 'totale_biglietti_evento' => 10000, 'biglietti_rimanenti' => 10000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2846.421075088596!2d11.245921115487306!3d44.486038179101556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fd68911c059af%3A0x84c9dbd8d81468cf!2sUnipol%20Arena!5e0!3m2!1sit!2sit!4v1621159142587!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Emilia Romagna', 'stato_evento' => 'aperto', 'locandina' => 'emmafortuna.jpg'],
            ['societa_organizzatrice' => 'PrixeoEvents', 'prezzo_biglietto' => 50.00, 'biglietto_scontato' => 0, 'sconto' => 15, 'data_ora' => '2022:05:31 21:00:00',
                'informazioni' => 'Tommaso Paradiso torna in concerto con Sulle Nuvole Tour! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso Palazzo del Turismo a Jesolo, il giorno 31 maggio 2022. Dai, ti aspettiamo!',
                'titolo' => 'Sulle Nuvole Tour', 'totale_biglietti_evento' => 9000, 'biglietti_rimanenti' => 9000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2800.570515349583!2d11.9226548!3d45.417999599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477edabbee13145b%3A0x714ccdfbd62caf79!2sKioene%20Arena!5e0!3m2!1sen!2sit!4v1621328076915!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Veneto', 'stato_evento' => 'aperto', 'locandina' => 'one_republic.jpg'],
            ['societa_organizzatrice' => 'CasaDelConcerto', 'prezzo_biglietto' => 30.00, 'biglietto_scontato' => 0, 'sconto' => 17, 'data_ora' => '2022:07:22 15:35:00',
                'informazioni' => 'Gazzelle torna in concerto! Vieni anche tu ad ascoltarlo dal vivo, una esperienza indimenticabile da vivere presso Ippodromo Le Capannelle a Roma, il giorno 22 luglio 2022. Dai, ti aspettiamo!',
                'titolo' => 'Gazzelle', 'totale_biglietti_evento' => 40000, 'biglietti_rimanenti' => 40000, 
                'coordinate_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2973.202817160552!2d12.569357049999999!3d41.82393065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sIppodromo%20Le%20Capannelle%2C%20Via%20Appia%20Nuova%201245%2C%2000178%20ROMA%20%2C%20Italia!5e0!3m2!1sen!2sit!4v1621324457267!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'luogo' => 'Lazio', 'stato_evento' => 'aperto', 'locandina' => 'gazzelle.jpg'],
            
        ]);
        
        /*
        DB::table('biglietto')->insert([
           
            ['codice_utente' => 7, 'codice_evento' => 1, 'metodo_pagamento' => 'bonifico', 'data_acquisto' => '2020:07:04 09:23:57', 'prezzo_acquisto' => 35.00],
            ['codice_utente' => 7, 'codice_evento' => 1, 'metodo_pagamento' => 'bonifico', 'data_acquisto' => '2020:07:04 09:25:37', 'prezzo_acquisto' => 35.00],
            ['codice_utente' => 7, 'codice_evento' => 2, 'metodo_pagamento' => 'paypal', 'data_acquisto' => '2020:05:19 12:24:56', 'prezzo_acquisto' => 100.00],
           
        ]);
         * 
         */
    }
}
