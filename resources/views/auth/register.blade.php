<x-layout>
<div class="d-flex flex-column align-items-center" style="margin-top: 200px">
    <i class="fa-solid fa-triangle-exclamation display-1"></i>
    <h1 class="display-2">Pagina non autorizzata</h1>
</div>
{{--! commento registrazione --}}
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 shadow-lg p-5 my-5 rounded-4 bg-body-tertiary bg-dark-subtle">
                <div class="text-center mb-5">
                    <h1>Super Admin</h1>
                    <small class="text-muted">Aggiungi Utenti Admin</small>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="my-4">
                        <label for="name" class="form-label">Username</label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="my-4">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{ old('password') }}">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="password_confirmation" class="form-label">Password confirmation</label>
                        <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-warning float-end w-100 my-4">Aggiungi</button>
                </form>

                <div>
                    <hr>
                    <a href="{{route('register')}}" class="btn btn-primary">Login Utente</a>
                </div>

            </div>
        </div>
    </div>
</x-layout>
