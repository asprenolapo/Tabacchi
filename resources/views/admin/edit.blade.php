<x-layout :$titlePage>
    <div class="container my-5">
        <a href="{{ route('admin') }}" class=" text-decoration-none"><i
                class="fa-solid fa-circle-chevron-left fs-4 me-2"></i> <span class="fs-4">back</span></a>
        <div class="row justify-content-center">
            <div class="col-7 p-5 rounded-4 shadow-lg">
                <form method="POST" action="{{ route('cigar.update', $product) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="d-flex gap-4">
                        <div class="w-75">
                            <label for="name" class="form-label">Nome</label>
                            <input name="name" type="text"
                                class="form-control text-muted @error('name') is-invalid @enderror" id="name"
                                value="{{ $product->name }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-25">
                            <label for="price" class="form-label">Prezzo</label>
                            <input name="price" type="number"
                                class="form-control @error('price') is-invalid @enderror" id="price"
                                value="{{ $product->price }}">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between gap-3 my-4">

                        <div class="w-50">
                            <label for="madein" class="form-label">Provenienza</label>
                            <input name="madein" type="text"
                                class="form-control @error('madein') is-invalid @enderror" id="madein"
                                value="{{ $product->madein }}">
                            @error('madein')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-50">
                            <label for="vitoladegalera" class="form-label">Vitola De Galera</label>
                            <input name="vitoladegalera" type="text"
                                class="form-control @error('vitoladegalera') is-invalid @enderror" id="vitoladegalera"
                                value="{{ $product->vitoladegalera }}">
                            @error('vitoladegalera')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-50">
                            <label for="cepo" class="form-label">Cepo</label>
                            <input name="cepo" type="text"
                                class="form-control text-muted @error('cepo') is-invalid @enderror" id="cepo"
                                value="{{ $product->cepo }}">
                            @error('cepo')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-50">
                            <label for="tripa" class="form-label">Tripa</label>
                            <input name="tripa" type="text"
                                class="form-control @error('tripa') is-invalid @enderror" id="tripa"
                                value="{{ $product->tripa }}">
                            @error('tripa')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between gap-3">
                        <div class="w-50">
                            <label for="intensity" class="form-label">Intensità</label>
                            <input name="intensity" type="text"
                                class="form-control @error('intensity') is-invalid @enderror" id="intensity"
                                value="{{ $product->intensity }}">
                            @error('intensity')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-50">
                            <label for="smoketime" class="form-label">Tempo Di Fumata</label>
                            <input name="smoketime" type="number"
                                class="form-control @error('smoketime') is-invalid @enderror" id="smoketime"
                                value="{{ $product->smoketime }}">
                            @error('smoketime')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-50">
                            <label for="flavors" class="form-label">Aroma</label>
                            <input name="flavors" type="text"
                                class="form-control @error('flavors') is-invalid @enderror" id="flavors"
                                value="{{ $product->flavors }}">
                            @error('flavors')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-50">
                            <label for="bestSellers" class="form-label">Best Sellers</label>
                            <select name="bestSellers" id="bestSellers"
                                class="form-control @error('bestSellers') is-invalid @enderror">
                                <option value="{{ $product->bestSellers }}"></option>
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
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                            cols="30" rows="5">{{ $product->description }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- SELEZIONE IMMAGINI -->
                    <div class="mb-3">
                        <label for="img" class="form-label">Foto</label>
                        <div class="d-flex gap-3 mb-3">
                            @foreach ($product->images as $image)
                                <div class="d-flex w-25">
                                    <img src="{{ Storage::url($image->path) }}" width="100px" height="100px">
                                    <div>
                                        <label>
                                            <input type="checkbox" class="form-check-input rounded-circle border-black" name="delete_images[]"
                                                value="{{ $image->id }}">
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

                    <button type="submit" class="btn btn-warning float-end w-25 my-4">Modifica</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
