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


## Aggiunte 02/12/2024

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



FORM BASE SENZA LIVEWIRE
 {{-- <div class="row justify-content-center mt-5">
            <div class="col-md-12 shadow p-5">
                <h2>Aggiungi prodotto</h2>
                <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="my-4">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            id="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between gap-3">
                        <div class="w-50">
                            <label for="price" class="form-label">Prezzo</label>
                            <input name="price" type="text"
                                class="form-control @error('price') is-invalid @enderror" id="price"
                                value="{{ old('price') }}">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-50">
                            <label for="tripa" class="form-label">Tripa</label>
                            <input name="tripa" type="text"
                                class="form-control @error('tripa') is-invalid @enderror" id="tripa"
                                value="{{ old('tripa') }}">
                            @error('tripa')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-50">
                            <label for="madein" class="form-label">Provenienza</label>
                            <input name="madein" type="text"
                                class="form-control @error('madein') is-invalid @enderror" id="madein"
                                value="{{ old('madein') }}">
                            @error('madein')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="my-4">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                            cols="30" rows="10">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Foto</label>
                        <input class="form-control @error('img') is-invalid @enderror" multiple type="file"
                            id="img" name="img">
                        @error('img')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary float-end w-25 my-4">Aggiungi</button>
                </form>
            </div>
        </div> --}}