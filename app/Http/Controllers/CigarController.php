<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Cigar;
use App\Mail\contactUser;
use App\Mail\contactAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CigarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cigars = Cigar::all();
        $bestSellers = Cigar::where('bestSellers',true)->get();
        $newArrivals = Cigar::whereBetween('created_at', [Carbon::now()->subDays(20), Carbon::now()])->get();

        return view('welcome', compact('cigars','bestSellers','newArrivals'));



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

    public function contactus(){
        return view('contactus');
    }
    
    public function contactusSubmit(Request $request){
        
        $name = $request->input('name');
        $email = $request->input('email');
        $body = $request->input('body');

        $userData = compact('name','email','body');

        try {
            Mail::to($email)->send(new contactUser($userData));
            Mail::to('leonardoferrieri@gmail.com')->send(new contactAdmin($userData));

            return redirect()->back()->with('success','Richiesta inviata con successo... controlla la tua mail');

        } catch (Exception $e) {
            
            return redirect()->back()->with('error','Errore durante l\'invio mail.. riprova più tardi');
        }
    }
}
