<x-layout :$titlePage>
    <div class="container my-5">
        <a href="{{ route('admin') }}" class="text-decoration-none">
            <i class="fa-solid fa-circle-chevron-left fs-4 me-2"></i> <span class="fs-4">back</span>
        </a>
        <div class="row justify-content-center">
            <div class="col-7 p-5 rounded-4 shadow-lg">
                <!-- Form di modifica prodotto -->
                <form method="POST" action="{{ route('cigar.update', $product) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <!-- Nome e Prezzo -->
                    <div class="d-flex gap-4">
                        <div class="w-75">
                            <label for="name" class="form-label">Nome</label>
                            <input name="name" type="text"
                                class="form-control text-muted @error('name') is-invalid @enderror" id="name"
                                value="{{ old('name', $product->name) }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-25">
                            <label for="price" class="form-label">Prezzo</label>
                            <input name="price" type="number"
                                class="form-control @error('price') is-invalid @enderror" id="price"
                                value="{{ old('price', $product->price) }}">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <!-- Provenienza e Descrizione della Provenienza -->
                    <div class="d-flex flex-column flex-md-row justify-content-between gap-3 my-4">
                        <div class="w-50">
                            <fieldset>
                                <label for="madein" class="form-label">Provenienza</label>
                                <div class="mb-3">
                                    <select name="madein" class="form-select">
                                        <option value="Altro" selected>Altro</option>
                                        <option value="Italia">Italia </option>
                                        <option value="Estero">Estero</option>
                                    </select>
                                </div>
                            </fieldset>
                        </div>
                        <div class="w-50">
                            <label for="origin_description" class="form-label">Descrizione Della Provenienza</label>
                            <input name="origin_description" type="text"
                                class="form-control @error('origin_description') is-invalid @enderror"
                                placeholder="Descrivi la provenienza..." />
                            @error('origin_description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Manifattura, Vitola e Cepo -->
                    <div class="d-flex flex-column flex-md-row justify-content-between gap-3 my-4">
                        
                        <div class="w-50">
                            <label for="manufacturing" class="form-label">Manifattura</label>
                            <input name="manufacturing" type="text"
                                class="form-control @error('manufacturing') is-invalid @enderror" id="manufacturing"
                                value="{{ old('manufacturing', $product->manufacturing) }}">
                            @error('manufacturing')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="w-50">
                            <label for="vitoladegalera" class="form-label">Lunghezza</label>
                            <input name="vitoladegalera" type="text"
                                class="form-control @error('vitoladegalera') is-invalid @enderror" id="vitoladegalera"
                                value="{{ old('vitoladegalera', $product->vitoladegalera) }}">
                            @error('vitoladegalera')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="w-50">
                            <label for="cepo" class="form-label">Diametro</label>
                            <input name="cepo" type="text"
                                class="form-control @error('cepo') is-invalid @enderror" id="cepo"
                                value="{{ old('cepo', $product->cepo) }}">
                            @error('cepo')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                    </div>

                    <!-- Ripieno, Intensità e Tempo di fumata-->
                    <div class="d-flex flex-column flex-md-row justify-content-between gap-3">
                        
                        <div class="w-50">
                            <label for="tripa" class="form-label">Ripieno</label>
                            <input name="tripa" type="text"
                                class="form-control @error('tripa') is-invalid @enderror" id="tripa"
                                value="{{ old('tripa', $product->tripa) }}">
                            @error('tripa')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="w-50">
                            <label for="intensity" class="form-label">Intensità</label>
                            <input name="intensity" type="text"
                                class="form-control @error('intensity') is-invalid @enderror" id="intensity"
                                value="{{ old('intensity', $product->intensity) }}">
                            @error('intensity')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="w-50">
                            <label for="smoketime" class="form-label">Tempo Di Fumata</label>
                            <input name="smoketime" type="number"
                                class="form-control @error('smoketime') is-invalid @enderror" id="smoketime"
                                value="{{ old('smoketime', $product->smoketime) }}">
                            @error('smoketime')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Forma, Best-Sellers e Packaging -->
                    <div class="d-flex flex-column flex-md-row justify-content-between gap-3 my-4">

                        <div class="w-50">
                            <label for="flavors" class="form-label">Forma</label>
                            <input name="flavors" type="text"
                                class="form-control @error('flavors') is-invalid @enderror" id="flavors"
                                value="{{ old('flavors', $product->flavors) }}">
                            @error('flavors')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="w-50">
                            <label for="bestSellers" class="form-label">Best Sellers</label>
                            <select name="bestSellers" id="bestSellers"
                                class="form-control @error('bestSellers') is-invalid @enderror">
                                <option value="0" {{ $product->bestSellers == 0 ? 'selected' : '' }}>No</option>
                                <option value="1" {{ $product->bestSellers == 1 ? 'selected' : '' }}>Si</option>
                            </select>
                            @error('bestSellers')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="w-50">
                            <label for="packaging" class="form-label">Packaging</label>
                            <input name="packaging" type="number"
                                class="form-control @error('packaging') is-invalid @enderror" id="packaging"
                                value="{{ old('packaging', $product->packaging) }}" min="1" max="99">
                            @error('packaging')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Descrizione -->
                    <div class="my-4">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                            rows="5">{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Immagini -->
                    <div class="mb-3">
                        <label for="img" class="form-label">Foto</label>
                        <div class="d-flex gap-3 mb-3">
                            @foreach ($product->images as $image)
                                <div class="d-flex w-25">
                                    <img src="{{ Storage::url($image->path) }}" width="100px" height="100px"
                                        alt="modified-img">
                                    <div>
                                        <label>
                                            <input type="checkbox"
                                                class="form-check-input rounded-circle border-black"
                                                name="delete_images[]" value="{{ $image->id }}">
                                            Rimuovi
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <input class="form-control @error('img') is-invalid @enderror" type="file" name="img[]"
                            multiple>
                        @error('img')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Bottone di invio -->
                    <button type="submit" class="btn btn-warning float-end w-25 my-4">Modifica</button>
                </form>
            </div>
        </div>

</x-layout>
