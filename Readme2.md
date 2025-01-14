FORM BASE SENZA LIVEWIRE
 {{-- <div class="row justify-content-center mt-5">
            <div class="col-md-12 shadow p-5">
                <h2>Aggiungi prodotto</h2>
                <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
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
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                            cols="30" rows="10">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Foto</label>
                        <input class="form-control @error('img') is-invalid @enderror" multiple type="file"
                            id="img" name="img">
                        @error('img')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary float-end w-25 my-4">Aggiungi</button>
                </form>
            </div>
        </div> --}}








admin copntroller
        <?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Cigar;
use Illuminate\Http\Request;
use App\Http\Requests\CigarRequest;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function admin()
    {

        $titlePage = 'Tabaccheria 195 - Admin Area';
        $users = User::all();

        $countUser = User::count();
        $countCigar = Cigar::count();

        $products = Cigar::all();

        return view('admin.admin', compact('users', 'titlePage', 'countUser', 'countCigar', 'products'));
    }

    public function edit(Cigar $product)
    {
        $titlePage = 'Tabaccheria 195 - Admin Area';
        $users = User::all();

        $countUser = User::count();
        $countCigar = Cigar::count();

        $products = Cigar::all();

        return view('admin.edit', compact('product', 'titlePage', 'countUser', 'countCigar', 'users', 'products'));
    }


    public function update(Request $request, Cigar $product)
    {

        $product->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'madein' => $request->input('madein'),
            'vitoladegalera' => $request->input('vitoladegalera'),
            'cepo' => $request->input('cepo'),
            'tripa' => $request->input('tripa'),
            'intensity' => $request->input('intensity'),
            'smoketime' => $request->input('smoketime'),
            'flavors' => $request->input('flavors'),
            'bestSellers' => $request->input('bestSellers'),
            'packaging' => $request->input('packaging'),
            'description' => $request->input('description'),
        ]);
        // AGGGIUNGE IMMAGINI, SE PRESENTI
        $images = $request->file('img');
        if ($images) {
            // SE è UN SIGOLO FILE LO METTIAMO IN UN ARRAY
            if (!is_array($images)) {
                $images = [$images];
            }

            // VERIFICA CHE NON CI SIANO PIù DI 4 IMMAGINI
            if (count($images) + $product->images->count() > 4) {
                return back()->withErrors(['img' => 'Puoi caricare un massimo di 4 immagini, comprese quelle già caricate.']);
            }

            // SALVA LE NUOVE IMMAGINI MODIFICATE
            foreach ($images as $image) {
                $path = $image->store('products', 'public'); // SALVA IMMAGINE
                $product->images()->create(['path' => $path]); // COLLEGA IMMAGINE A PRODOTTO
            }
        }

        // RIMUOVE LE IMMAGINI SELEZIONATE 
        if ($request->has('delete_images')) {
            foreach ($request->input('delete_images') as $imageId) {
                $image = $product->images()->find($imageId);
                if ($image) {
                    // ELIMINA DA DISCO
                    Storage::disk('public')->delete($image->path);

                    // ELIMINA DA DB
                    $image->delete();
                }
            }
        }

        return redirect()->route('admin', compact('product'))->with('success', 'Prodotto Modificato');
    }


    public function destroy(Cigar $product)
    {
        $product->delete();

        return redirect()->route('admin')->with('successremove', 'Prodotto Eliminato');
    }
}
