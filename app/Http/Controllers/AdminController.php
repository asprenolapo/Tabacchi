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
