<div class="row justify-content-center mt-5">
    <div class="col-md-12 shadow p-5">
        <h2>Aggiungi prodotto</h2>
        <form method="POST" wire:submit.prevent="save"   enctype="multipart/form-data">
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
                    <input wire:model="price" type="text"
                        class="form-control @error('price') is-invalid @enderror" id="price"
                        value="{{ old('price') }}">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-50">
                    <label for="tripa" class="form-label">Tripa</label>
                    <input wire:model="tripa" type="text"
                        class="form-control @error('tripa') is-invalid @enderror" id="tripa"
                        value="{{ old('tripa') }}">
                    @error('tripa')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-50">
                    <label for="madein" class="form-label">Provenienza</label>
                    <input wire:model="madein" type="text"
                        class="form-control @error('madein') is-invalid @enderror" id="madein"
                        value="{{ old('madein') }}">
                    @error('madein')
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
<<<<<<< HEAD
                    id="img" wire:model="img">
=======
                    id="img" wire:model="images[]">
>>>>>>> 83b0b27db5525fd47f64f252581a6378505866cf
                @error('img')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary float-end w-25 my-4">Aggiungi</button>
        </form>
    </div>
</div>
