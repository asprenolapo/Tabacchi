<x-layout>
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 shadow-lg p-5 mt-5 bg-dark-subtle">
                <div class="d-flex flex-column align-items-center">
                    <h1 class="text-center">Contattaci</h1>
                    <small class="text-center">Per specifiche, richieste, info o altro puoi compilare il nostro form... </small>
                    <small class="text-center text-muted">Risponderemo quanto prima </small>
                </div>
                <form method="POST" action="{{route('contactus.submit')}}">
                    @csrf
                    <div class="my-4">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            id="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="surname" class="form-label">Cognome</label>
                        <input name="surname" type="text" class="form-control @error('surname') is-invalid @enderror"
                            id="surname" value="{{ old('surname') }}">
                        @error('surname')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="body" class="form-label">Richiesta</label>
                        <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" cols="30"
                            rows="10">{{ old('body') }}</textarea>
                        @error('body')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary float-end w-25 my-4">Invia</button>    
                </form>
            </div>
        </div>
    </div>
</x-layout>