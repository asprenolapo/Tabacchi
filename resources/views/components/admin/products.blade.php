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
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="my-4">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            id="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="d-flex justify-between">
                        <div class="w-50 me-5">
                            <label for="name" class="form-label">Prezzo</label>
                            <input name="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" id="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-50 ms-3">
                            <label for="name" class="form-label">Tripa</label>
                            <input name="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" id="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="my-4">
                        <label for="body" class="form-label">Descrizione</label>
                        <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" cols="30"
                            rows="10">{{ old('body') }}</textarea>
                        @error('body')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Foto</label>
                        <input class="form-control @error('iamge') is-invalid @enderror" type="file" id="image"
                            name="image">
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary float-end w-25 my-4">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>




</div>
