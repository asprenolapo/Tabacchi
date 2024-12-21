<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Cigar;
use Illuminate\Http\Request;
use App\Http\Requests\CigarRequest;


class AdminController extends Controller
{
    public function admin()
    {

        $titlePage = 'Tabaccheria 195 - Admin Area';
        $users = User::all();

        $countUser = User::count();
        $countCigar = Cigar::count();

        $products = Cigar::all();

        return view('admin.admin', compact('users', 'titlePage', 'countUser', 'countCigar','products'));
    }

    public function edit(Cigar $product)
    {
        $titlePage = 'Tabaccheria 195 - Admin Area';
        $users = User::all();

        $countUser = User::count();
        $countCigar = Cigar::count();

        $products = Cigar::all();

        return view('admin.edit', compact('product', 'titlePage','countUser','countCigar','users','products'));
    }


    public function update(Request $request, Cigar $product)
    {
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->madein = $request->input('madein');
        $product->vitoladegalera = $request->input('vitoladegalera');
        $product->cepo = $request->input('cepo');
        $product->tripa = $request->input('tripa');
        $product->intensity = $request->input('intensity');
        $product->smoketime = $request->input('smoketime');
        $product->flavors = $request->input('flavors');
        $product->bestSellers = $request->input('bestSellers');
        $product->description = $request->input('description');
        // 'img' => $request->has('img') ? $request->file('img')->store('/public/products') : $article->img, 

        $product->save();
        
        // $cigar->update([
        //     'name' => $request->input('name'),
        //     'price' => $request->input('price'),
        //     'madein' => $request->input('madein'),
        //     'vitoladegalera' => $request->input('vitoladegalera'),
        //     'cepo' => $request->input('cepo'),
        //     'tripa' => $request->input('tripa'),
        //     'intensity' => $request->input('intensity'),
        //     'smoketime' => $request->input('smoketime'),
        //     'flavors' => $request->input('flavors'),
        //     'bestSellers' => $request->input('bestSellers'),
        //     'description' => $request->input('description'),
        // ]);
        

        return redirect()->route('admin', compact('product'))->with('success','Prodotto Modificato'); //la pagina del dettaglio
    }


    public function destroy(Cigar $product)
    {
        $product->delete();

        return redirect()->route('admin')->with('success','Prodotto Eliminato');
    }
}
