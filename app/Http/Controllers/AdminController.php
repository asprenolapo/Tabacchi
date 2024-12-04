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

        return view('admin', compact('users', 'titlePage', 'countUser', 'countCigar'));
    }

    public function store(CigarRequest $request)
    {

        try {

            Cigar::create([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'madein' => $request->input('madein'),
                'tripa' => $request->input('tripa'),
                'description' => $request->input('description'),
                'img' => $request->has('img') ? $request->file('img')->store('products', 'public') : '/asset/default.jpg',
            ]);

            return redirect()->back()->with('success', 'Prodotto creato con successo');
        } catch (Exception $e) {

            return redirect()->back()->with('error', $e);
        }
        // if($request->has('img')){
        //     foreach ($request->file('img') as $img) {
        //         $img->store('products','public');
        //     }
        // }

    }
}
