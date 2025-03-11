<div class="row justify-content-center">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Successo!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Eliminato</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="col-md-12 shadow p-5 bg-white rounded-4">
        <h2>Aggiungi prodotto</h2>
        <form method="POST" wire:submit.prevent="save" enctype="multipart/form-data">
            {{-- Nome, Marca e Prezzo --}}
            <div class="d-flex flex-column flex-md-row justify-content-between gap-2 my-4">

                <div class="w-50">
                    <label for="name" class="form-label">Nome</label>
                    <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        id="name" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-50">
                    <label for="brand" class="form-label">Marca</label>
                    <input wire:model="brand" type="text" class="form-control @error('brand') is-invalid @enderror"
                        id="brand" value="{{ old('brand') }}">
                    @error('brand')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-50">
                    <label for="price" class="form-label">Prezzo</label>
                    <input wire:model="price" type="number" step="0.01"
                        class="form-control @error('price') is-invalid @enderror" id="price"
                        value="{{ old('price') }}">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            {{-- Origine, Provenienza e Manifattura --}}
            <div class="d-flex flex-column flex-md-row justify-content-between gap-2 my-4">

                <div class="w-50">
                    <fieldset>
                        <label class="form-label">Origine</label>
                        <div class="mb-3">
                            <select wire:model="madein" class="form-select">
                                <option value="Altro" selected>Altro</option>
                                <option value="Italia">Italia </option>
                                <option value="Estero">Estero</option>
                            </select>
                        </div>
                    </fieldset>
                </div>

                <div class="w-50">
                    <label for="origin-description" class="form-label">Provenienza</label>
                    <input wire:model="origin_description" type="text"
                        class="form-control @error('origin_description') is-invalid @enderror" id="origin-description"
                        placeholder="Descrivi la provenienza..." />
                    @error('origin_description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-50">
                    <label for="manufacturing" class="form-label">Manifattura</label>
                    <input wire:model="manufacturing" type="text"
                        class="form-control @error('manufacturing') is-invalid @enderror" id="manufacturing"
                        value="{{ old('manufacturing') }}">
                    @error('manufacturing')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

            </div>
            {{-- Fascia, Lunghezza e Diametro --}}
            <div class="d-flex flex-column flex-md-row justify-content-between gap-3 my-4">

                <div class="w-50">
                    <label for="band" class="form-label">Fascia</label>
                    <input wire:model="band" type="text" class="form-control @error('band') is-invalid @enderror"
                        id="band" value="{{ old('band') }}">
                    @error('band')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-50">
                    <label for="vitoladegalera" class="form-label">Lunghezza</label>
                    <input wire:model="vitoladegalera" type="text"
                        class="form-control @error('vitoladegalera') is-invalid @enderror" id="vitoladegalera"
                        value="{{ old('vitoladegalera') }}">
                    @error('vitoladegalera')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-50">
                    <label for="cepo" class="form-label">Diametro</label>
                    <input wire:model="cepo" type="text" class="form-control @error('cepo') is-invalid @enderror"
                        id="cepo" value="{{ old('cepo') }}">
                    @error('cepo')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            {{-- Ripieno, Intensità e Tempo di fumata --}}
            <div class="d-flex flex-column flex-md-row justify-content-between gap-3 my-4">

                <div class="w-50">
                    <label for="tripa" class="form-label">Ripieno</label>
                    <input wire:model="tripa" type="text"
                        class="form-control @error('tripa') is-invalid @enderror" id="tripa"
                        value="{{ old('tripa') }}">
                    @error('tripa')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-50">
                    <label for="intensity" class="form-label">Intensità</label>
                    <input wire:model="intensity" type="text"
                        class="form-control @error('intensity') is-invalid @enderror" id="intensity"
                        value="{{ old('intensity') }}">
                    @error('intensity')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-50">
                    <label for="smoketime" class="form-label">Tempo Di Fumata</label>
                    <input wire:model="smoketime" type="number"
                        class="form-control @error('smoketime') is-invalid @enderror" id="smoketime"
                        value="{{ old('smoketime') }}" placeholder="Solo numeri da 0 a 999">
                    @error('smoketime')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            {{-- Forma, Packaging e Best Sellers --}}
            <div class="d-flex flex-column flex-md-row justify-content-between gap-3 my-4">

                <div class="w-50">
                    <label for="flavors" class="form-label">Forma</label>
                    <input wire:model="flavors" type="text"
                        class="form-control @error('flavors') is-invalid @enderror" id="flavors"
                        value="{{ old('flavors') }}">
                    @error('flavors')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-50">
                    <label for="packaging" class="form-label">Packaging</label>
                    <input wire:model="packaging" type="number"
                        class="form-control @error('packaging') is-invalid @enderror" id="packaging"
                        value="{{ old('packaging') }}">
                    @error('packaging')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-50">
                    <label for="bestSellers" class="form-label">Best Sellers</label>
                    <select wire:model="bestSellers" id="bestSellers"
                        class="form-control @error('bestSellers') is-invalid @enderror">
                        <option value=0 selected>No</option>
                        <option value=1>Si</option>
                    </select>
                    @error('bestSellers')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            {{-- Descrizione --}}
            <div class="my-4">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" wire:model="description" id="description"
                    cols="30" rows="10">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            {{-- Foto --}}
            <div class="mb-3">
                <label for="img" class="form-label">Foto</label>
                <input class="form-control @error('img') is-invalid @enderror" multiple type="file"
                    id="img" wire:model="img">
                @error('img')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="spinner-border text-primary" role="status" wire:loading wire:target="img">
                <span class="visually-hidden">Uploading...</span>
            </div>
            <button type="submit" class="btn btn-primary float-end w-25 my-4">Aggiungi</button>
        </form>
    </div>
</div>
<script>
    let livewireMsg = document.querySelector('.alert');
    if (livewireMsg) {
        setTimeout(() => {
            livewireMsg.classList.add('fade-out'); // Classe CSS per l'animazione di uscita
        }, 3000); // Tempo di attesa prima che inizi l'animazione (3 secondi)

        // Dopo l'animazione, rimuoviamo il messaggio
        setTimeout(() => {
            livewireMsg.remove();
        }, 3500); // Dopo 1 secondo dalla fine dell'animazione di scomparsa
    }
</script>
