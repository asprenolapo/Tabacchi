<x-layout>



    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 shadow-lg p-5 my-5 rounded-4 bg-body-tertiary bg-dark-subtle">
                <div class="text-center mb-5">
                    <h1>Area Privata</h1>
                    <small class="text-muted">Inserisci le credenziali per accedere alla tua area privata</small>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="my-4">
                        <label for="name" class="form-label">Username</label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            id="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" id="password"
                            value="{{ old('password') }}">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary float-end w-100 my-4">Accedi</button>
                </form>

                <div>
                    <hr>
                    <a href="{{route('register')}}">Registra Utente</a>
                </div>

            </div>
        </div>
    </div>
</x-layout>