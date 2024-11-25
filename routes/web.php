<?php

use App\Http\Controllers\CigarController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CigarController::class, 'index'] ) -> name('home');

Route::get('/sigari',[CigarController::class, 'sigaripage'] ) -> name('sigari'); 
