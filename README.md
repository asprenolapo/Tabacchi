0. **Sistemato Search**
    - Su pc => piccolo a dx
    - Su smartphone => grande al centro
    COMPLETATO

1. **lavoarzione card con link alla pagina di dettaglio** 
    - hover + transizione e shadow aggiunto alla card
    COMPLETATO

2. **pagina di dettaglio**
    - rotta parametrica implementata in vista, bottone, rotta
    - *vista da completare il frontend*

3. **pagina amministratore con pass**
    - implementare fortify
    - creato utente admin
    - login con rotta admin
    - impostato l'accesso username e password (no mail)
    - *vista admin nascosta (solo uri)*
        - implementato tab con tabella utenti e tipologia di utente
        - aggiunto tab prodotti con widget e form 

5 pagina con mail per contattaci

6. **implementare logica ricerca e filtri per prodotti**
    - ricerca implementato
COMPLETATO

8 implementazione cookies e controllo età 


## Aggiunte 02/12/2024 #############################################################################

1. Trovata soluzione per immagine multipla
    - da fare modello/migrazione e relazioni 1toN
    - *da fare con Aspreno*

2. Tab di Admin = Admin Area

3. Logica + frontend primi 2 widget
    - *da renderlo un link*
    - *Rotta parametrica*
    - *vista dettaglio con dati*

4. Sistemato immagine card
    - proporzione immagine
    - altezza fissa uguale per tutti
    - *impostare la prima card*

## Aggiunte 04/12/2024 #############################################################################
1. Pagina contattaci 
    - Form e rotta
    - Logica invio con 2 Mailable (Admin e user)
    - Vista mail Admin e User *da valutare il frontend*

2. Pagina dettaglio
    - implementata navigazione Tabpanel nelle foto del prodotto (il layout può essere cambiato sia con foto piccole a destra ke in basso)

## Aggiunte 05/12/2024 #############################################################################
1. Immagini fixed
2. Card prima immagine fixed
3. Dettaglio Tab immagini fixed *ma a volte da problemi*
4. MANDRAGATA per le foto senza
**creata un'altra pagina admin supplementare.. se non piace la si cancella e si ripristina l'altra**


## Fix del 11/12/2024 ##############################################################################
1. sistemate immagini pagina welcome 
2. inserita prima parte degli script 
3. credo di aver sistemato anche la quesione delle card 



## to do front #########################################################################

1. sistemare foto della pagina

2. sostituire posizione chi siamo con posizione best seller - completato

3. possibile ulteriore sezione?

4. script di tute le parti necessarie alle info riguardo il cliente - da completare con maggiori informazioni del committente

5. swiper per best seller -**completato**  da rivedere parte responsive 

6. luxury cigar e ulteriori sezioni di prodotto in mostra?

6. controllo dimensioni delle immagini delle card con resize - credo vada meglio dopo qualche modifica effettuta

7. fixare il back to top button

8. sort con modale o altro metodo per la pagina dei sigari - da rivedere ma credo lo abbiamo risolto 

9. completare front-end pagine di contattaci (sfoindo/foto) e mail con relativo messaggio

## to do back ############################################################################

1. testare definitivo funzionamento di inserimento pordotti - done

2. test definitivo invio e ricezione mail del contattaci

3. gestire logica completa per la ricerca per filtri da capirte come operare al meglio su questa logica **FATTO**

4. completare logica inserimento max 3/4 immagini per prodotto 

## fix del 19-12-24 ############################################################################
1. ho risolto il problema dello swiper con l'autoplay. putroppo non riesco a risolvere la parte responsive della pagina
2. modificato parte del dettaglio sigari secondo le richieste di leonardo se vedi ho messo un commento a riga  85 per spiegarti 
3. piccolo problema sorto nella pagina sigari invece dove il grid non funziona da schermo grande non riesco a capire onestamente vorrei si vedessero le card come prima e invece si vedono solo del card sfondate
4. IMPORTANTE RISOLVERE PROBLEMA AL CLICK DELLA FOTO ALLA PRIMA RICARICA DELLA PAGINA DI DETTAGLIO IN MODO DA NON FARNE APPARIRE DUE UNA SOTTO L'ALTRA - risolto


## 20/12/2024 ############################################à
1. Pagina dettaglio: 
    - risolto bug immagini
    - Frontend migliorato con sezione caratteristiche  
2. Sezione Prodotti 
    - Tabella prodotti + logica
    - Tab sezione Prodotti
    - elimina + modifica
3. Azioni prodotti:
    - Modifica
        - Form vista **da valutare nuovo form se metterlo anche in aggiungi**
        - funzione edit + update
    - Eliminazione:
        - funzione destroy
4. tabella prodotti aggiornata con counter immagini **per permettere di riaggiornare l'immagine se è 0 in un secondo momento**
5. Aggiunte preview nel form di update di un prodotto *ma aggiustare l'aggiunta file*
6. Aggiunto il messaggio bloccante, di conferma prima della cancellazione
7. Aggiunta come active e primo tab la tabella prodotti per 2 motivi
    1. dopo la modifica riporta direttamente al tab della tabella prodotti e non a inserimento
    2. l'utente potrebbe voler vedere più volte la tabella prodotti rispetto a inserisci prodotto
8. Aggiunto il tab "Da ordinare" con tabella prodotti e quantità
    **SOTTOPORRE LA QUESTIONE QUANTITA' ANCHE NELL'AGGIUNTA PRODOTTI**
    push per prova 3
 commentare la resgistrazione





  @if (session()->has('error'))
    <div class="alert alert-dismissible fade show w-25 ms-auto my-3 shadow-lg z-1"
        style="border-left: 6px solid red; transition: all 0.5s ease-out; position:absolute; top: 120px; right:0"
        id="sessionMSG">
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-triangle-exclamation display-6 me-4 text-danger"></i>
            <div>
                <p class="text-danger fw-bold m-0">Errore</p>
                <p class="text-muted m-0">{{ session('error') }}</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@elseif (session()->has('success'))
    <div class="alert alert-dismissible fade show w-25 ms-auto my-3 shadow-lg z-1"
        style="border-left: 6px solid green; transition: all 0.5s ease-out; position:absolute; top: 120px; right:0"
        id="sessionMSG">
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-circle-check display-6 me-4 text-success"></i>
            <div>
                <p class="text-success fw-bold m-0">Inviato</p>
                <p class="text-muted m-0">{{ session('success') }}</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif