@if (session()->has('success'))
        <div class="alert alert-dismissible fade show w-25 ms-auto my-3 shadow-lg z-1"
            style="border-left: 6px solid green; transition: all 0.5s ease-out; position:absolute; top: 80px; right:0"
            id="sessionMSG">
            <div class="d-flex align-items-center">
                <i class="fa-solid fa-circle-check display-6 me-4 text-success"></i>
                <div>
                    <p class="text-success fw-bold m-0">Aggiunto</p>
                    <p class="text-muted m-0">{{ session('added') }}</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

<div class="container-fluid">
    <div class="row ">
        <h2 class="mb-4">Widget</h2>
        <div class="d-flex justify-content-center">
            <x-admin.widget title='Utenti' data='3' icon='fa-regular fa-user' color='bg-primary' />
            <x-admin.widget title='Prodotti' data='56' icon='fa-solid fa-smoking' color='bg-warning' />
            <x-admin.widget title='Esauriti' data='2' icon='fa-solid fa-triangle-exclamation' color='bg-info' />
            <x-admin.widget title='Ordinati' data='5' icon='fa-solid fa-truck-fast' color='bg-danger' />
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-12 shadow p-5">
                <h2>Aggiungi prodotto</h2>
                <form method="POST" action="{{route('admin.store')}}" enctype="multipart/form-data">
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
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30"
                            rows="10">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Foto</label>
                        <input class="form-control @error('img') is-invalid @enderror" type="file" id="img"
                            name="img">
                        @error('img')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary float-end w-25 my-4">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>




</div>
