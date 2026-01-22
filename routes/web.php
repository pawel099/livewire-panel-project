<?php

use App\Models\account;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
 

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth','verified'])->group(function() {
// Route::get('konto',account::class);

});  

require __DIR__.'/settings.php';




