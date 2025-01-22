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
            @csrf
            <div class="my-4">
                <label for="name" class="form-label">Nome</label>
                <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    id="name" value="{{ old('name') }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-between gap-3 my-4">
                <div class="w-50">
                    <label for="price" class="form-label">Prezzo</label>
                    <input wire:model="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
                        id="price" value="{{ old('price') }}">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-50">
                    <label for="madein" class="form-label">Provenienza</label>
                    <input wire:model="madein" type="text" class="form-control @error('madein') is-invalid @enderror"
                        id="madein" value="{{ old('madein') }}">
                    @error('madein')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-50">
                    <label for="vitoladegalera" class="form-label">Vitola De Galera</label>
                    <input wire:model="vitoladegalera" type="text"
                        class="form-control @error('vitoladegalera') is-invalid @enderror" id="vitoladegalera"
                        value="{{ old('vitoladegalera') }}">
                    @error('vitoladegalera')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-between gap-3 my-4">
                <div class="w-50">
                    <label for="cepo" class="form-label">Cepo</label>
                    <input wire:model="cepo" type="text" class="form-control @error('cepo') is-invalid @enderror"
                        id="cepo" value="{{ old('cepo') }}">
                    @error('cepo')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-50">
                    <label for="tripa" class="form-label">Tripa</label>
                    <input wire:model="tripa" type="text" class="form-control @error('tripa') is-invalid @enderror"
                        id="tripa" value="{{ old('tripa') }}">
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
                        value="{{ old('smoketime') }}">
                    @error('smoketime')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-between gap-3 my-4">
                <div class="w-50">
                    <label for="flavors" class="form-label">Aroma</label>
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
            <div class="my-4">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" wire:model="description" id="description"
                    cols="30" rows="10">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

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
    let msg = document.querySelector('.alert');
    if (msg) {
        setTimeout(() => {
            msg.classList.add('fade-out'); // Classe CSS per l'animazione di uscita
        }, 3000);  // Tempo di attesa prima che inizi l'animazione (3 secondi)

        // Dopo l'animazione, rimuoviamo il messaggio
        setTimeout(() => {
            msg.remove();
        }, 3500);  // Dopo 1 secondo dalla fine dell'animazione di scomparsa
    }
</script>
