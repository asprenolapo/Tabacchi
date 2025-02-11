<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
            
            <h2 class="mb-4">Prodotti ({{ $products->count() }})</h2>

            {{-- <div class="border w-100 border-1 border-dark rounded-pill d-flex ms-auto justify-content-center align-items-center p-2"
                id="div-search">
                <input class="input-search w-100" type="text" placeholder="Ricerca per tutti i campi" wire:model.live="search">
                <i class="fa-solid fa-magnifying-glass fs-3 ms-2"></i>
            </div> --}}
        </div>
    </div>
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr class="fs-5">
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Provenienza</th>
                    <th scope="col">Immagini</th>
                    <th scope="col">Data creazione</th>
                    <th scope="col">Azione</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->madein }}</td>
                        <td class="{{ $product->images()->count() == 0 ? 'text-danger fw-bold' : '' }}">
                            {{ $product->images()->count() }}</td>
                        <td>{{ $product->created_at->format('d M Y') }}</td>
                        <td class="d-flex">
                            <a href="{{ route('cigar.edit', compact('product')) }}"><i
                                    class="fa-solid fa-pen-to-square text-warning me-4 fs-4"></i></a>
                            {{-- <a href=""><i class="fa-solid fa-trash-can text-danger fs-4"></i></a> --}}
                            <form method="POST" action="{{ route('cigar.delete', compact('product')) }}"
                                onsubmit="return confirmDelete(event)">
                                @csrf
                                @method('delete')
                                <button type="submit" class=" border-0 bg-transparent"><i
                                        class="fa-solid fa-trash-can text-danger fs-4"></i></button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <th scope="row" colspan="100%" class="text-center text-danger">Nessun prodotto caricato!</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</div>

<script>
    function confirmDelete(event) {
        event.preventDefault(); // Previeni l'invio del form
        if (confirm('Sei sicuro di voler cancellare questo prodotto ?')) {
            // Se l'utente conferma, invia il form
            event.target.submit();
        } else {
            // Altrimenti, annulla l'operazione
            return false;
        }
    }
</script>
