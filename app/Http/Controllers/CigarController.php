<?php

namespace App\Http\Controllers;

use App\Models\Cigar;
use Illuminate\Http\Request;

class CigarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cigars=Cigar::all();

        return view('welcome', compact('cigars'));

    }

    public function sigaripage()
    {
        return view('sigari');       
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cigar $cigar)
    {
        return view('dettaglioSigari',compact('cigar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cigar $cigar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cigar $cigar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cigar $cigar)
    {
        //
    }

}
