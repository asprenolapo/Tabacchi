<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Cigar;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use App\Http\Requests\CigarRequest;

class AdminController extends Controller
{
    public function admin()
    {

        $users = User::all();
        // dd(Route::currentRouteName());
        return view('admin', compact('users'));
    }

    public function store(CigarRequest $request)
    {
        Cigar::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'madein' => $request->input('madein'),
            'tripa' => $request->input('tripa'),
            'description' => $request->input('description'),
            'img'=> $request->has('img') ? $request->file([])->store('products', 'public') : '/asset/default.jpg',
        ]);
        return redirect()->back()->with('success', 'Prodotto creato con successo');
    }
}
