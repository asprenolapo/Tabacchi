<div class="row justify-content-center">
    @if (session()->has('success'))
        <div class="alert alert-dismissible fade show w-25 ms-auto my-3 shadow-lg z-1 bg-white"
            style="border-left: 6px solid green; transition: all 0.5s ease-out; position:absolute; top: 430px; right:0"
            id="sessionMSG">
            <div class="d-flex align-items-center">
                <i class="fa-solid fa-circle-check display-6 me-4 text-success"></i>
                <div>
                    <p class="text-success fw-bold m-0">Aggiunto</p>
                    <p class="text-muted m-0">{{ session('success') }}</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
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

            <div class="d-flex flex-column flex-md-row justify-content-between gap-3">
                <div class="w-50">
                    <label for="price" class="form-label">Prezzo</label>
                    <input wire:model="price" type="number" class="form-control @error('price') is-invalid @enderror"
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

                <div class="w-50">
                    <label for="flavors" class="form-label">Aroma</label>
                    <input wire:model="flavors" type="text"
                        class="form-control @error('flavors') is-invalid @enderror" id="flavors"
                        value="{{ old('flavors') }}">
                    @error('flavors')
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
