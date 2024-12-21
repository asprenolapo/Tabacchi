<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CigarController;
use App\Livewire\UpdateCigar;
use Illuminate\Support\Facades\Route;

//HOME
Route::get('/', [CigarController::class, 'index'] ) -> name('home');

//SIGARI
Route::get('/sigari',[CigarController::class, 'sigaripage'] ) -> name('sigari'); 

//DETTAGLIO SIGARI
Route::get('/sigaro/{cigar}', [CigarController::class, 'show'])->name('dettaglio.sigari');

//CONTACT US
Route::get('/contactus', [CigarController::class, 'contactus'] ) -> name('contactus');
Route::post('/contactus/submit', [CigarController::class, 'contactusSubmit'] ) -> name('contactus.submit');

//ADMIN PAGE
Route::middleware(['auth'])->group(function(){

    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('admin/{product}', [AdminController::class, 'edit'])->name('cigar.edit');
    Route::put('/admin/{product}/update', [AdminController::class, 'update'])->name('cigar.update');
    Route::delete('admin/destroy/{product}',[AdminController::class,'destroy'])->name('cigar.delete');

});
