<x-layout>
    @if (session()->has('error'))
    <div class="alert alert-dismissible fade show w-25 ms-auto my-3 shadow-lg z-1"
        style="border-left: 6px solid red; transition: all 0.5s ease-out; position:absolute; top: 120px; right:0"
        id="sessionMSG">
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-triangle-exclamation display-6 me-4 text-danger"></i>
            <div>
                <p class="text-danger fw-bold m-0">Errore</p>
                <p class="text-muted m-0">{{ session('error') }}</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@elseif (session()->has('success'))
    <div class="alert alert-dismissible fade show w-25 ms-auto my-3 shadow-lg z-1"
        style="border-left: 6px solid green; transition: all 0.5s ease-out; position:absolute; top: 120px; right:0"
        id="sessionMSG">
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-circle-check display-6 me-4 text-success"></i>
            <div>
                <p class="text-success fw-bold m-0">Inviato</p>
                <p class="text-muted m-0">{{ session('success') }}</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 shadow-lg p-5 mt-5">
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