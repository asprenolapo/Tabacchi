<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Prodotti esauriti ({{$products->count()}})</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Provenienza</th>
                        <th scope="col">Immagini</th>
                        <th scope="col">Quantità</th>
                        <th scope="col">Data creazione</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->madein}}</td>
                            <td class="{{$product->images()->count() == 0 ? 'text-danger fw-bold' : ''}}">{{$product->images()->count()}}</td>
                            <td class="text-danger fw-bold">0</td>
                            <td class="d-flex">
                                <a href="{{route('cigar.edit', compact('product'))}}"><i class="fa-solid fa-pen-to-square text-warning me-4 fs-4"></i></a>
                                {{-- <a href=""><i class="fa-solid fa-trash-can text-danger fs-4"></i></a> --}}
                                <form method="POST" action="{{route('cigar.delete', compact('product'))}}" onsubmit="return confirmDelete(event)">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class=" border-0 bg-transparent"><i class="fa-solid fa-trash-can text-danger fs-4"></i></button>
                                </form>
                                
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th scope="row" colspan="100%">Nessun utente creato!</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
