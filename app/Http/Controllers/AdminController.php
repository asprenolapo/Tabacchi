<?php

namespace App\Http\Controllers;

use App\Models\Cigar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    // Metodo per visualizzare la dashboard dell'amministratore
    public function admin()
    {
        $titlePage = 'Tabaccheria 195 - Admin Area';
        $users = User::all();
        $countUser = User::count();
        $countCigar = Cigar::count();
        $products = Cigar::all();

        return view('admin.admin', compact('users', 'titlePage', 'countUser', 'countCigar', 'products'));
    }

    // Metodo per visualizzare il form di modifica
    public function edit(Cigar $product)
    {
        $titlePage = 'Tabaccheria 195 - Admin Area';
        $users = User::all();
        $countUser = User::count();
        $countCigar = Cigar::count();
        $products = Cigar::all();

        return view('admin.edit', compact('product', 'titlePage', 'countUser', 'countCigar', 'users', 'products'));
    }

    // Metodo per aggiornare un prodotto
    public function update(Request $request, Cigar $product)
    {
        // Validazione dei dati
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:40',
            'price' => 'required|numeric|min:1',
            'madein' => 'required|min:3|max:30',
            'vitoladegalera' => 'nullable|string|max:30',
            'cepo' => 'nullable|string|max:30',
            'tripa' => 'nullable|string|max:30',
            'intensity' => 'nullable|string|max:30',
            'smoketime' => 'nullable|integer|min:1|max:999',
            'flavors' => 'nullable|string|max:300',
            'bestSellers' => 'nullable|boolean',
            'description' => 'required|min:5|max:5000',
            'packaging' => 'nullable|integer|min:1|max:99',
            'img' => 'nullable|array|max:4',
            'img.*' => 'image|max:2048',
        ]);

        // Aggiornamento del prodotto
        $product->update([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'madein' => $validatedData['madein'],
            'vitoladegalera' => $validatedData['vitoladegalera'] ?? null,
            'cepo' => $validatedData['cepo'] ?? null,
            'tripa' => $validatedData['tripa'] ?? null,
            'intensity' => $validatedData['intensity'] ?? null,
            'smoketime' => $validatedData['smoketime'] ?? null,
            'flavors' => $validatedData['flavors'] ?? null,
            'bestSellers' => $validatedData['bestSellers'] ?? false,
            'description' => $validatedData['description'],
            'packaging' => $validatedData['packaging'] ?? 0,
        ]);

        // Gestione delle immagini
        if ($request->hasFile('img')) {
            $images = $request->file('img');
            if (count($images) + $product->images->count() > 4) {
                return back()->withErrors(['img' => 'Puoi caricare un massimo di 4 immagini, comprese quelle già caricate.']);
            }
            foreach ($images as $image) {
                $path = $image->store('products', 'public');
                $product->images()->create(['path' => $path]);
            }
        }

        // Eliminazione delle immagini selezionate
        if ($request->has('delete_images')) {
            foreach ($request->input('delete_images') as $imageId) {
                $image = $product->images()->find($imageId);
                if ($image) {
                    // Elimina immagine da disco e dal database
                    Storage::disk('public')->delete($image->path);
                    $image->delete();
                }
            }
        }

        return redirect()->route('admin')->with('success', 'Prodotto Modificato Con Successo');
    }

    // Metodo per eliminare un prodotto
    public function destroy(Cigar $product)
    {
        // Elimina le immagini e il prodotto
        foreach ($product->images as $image) {
            Storage::disk('public')->delete($image->path);
        }

        $product->delete();

        return redirect()->route('admin')->with('error', 'Prodotto Eliminato Con Successo');
    }
}
