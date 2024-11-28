<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CigarController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CigarController::class, 'index'] ) -> name('home');

Route::get('/sigari',[CigarController::class, 'sigaripage'] ) -> name('sigari'); 

Route::get('/sigaro/{cigar}', [CigarController::class, 'show'])->name('dettaglio.sigari');


Route::middleware(['auth'])->group(function(){

    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

});
//Pagina Admin