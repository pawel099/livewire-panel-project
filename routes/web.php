<?php
use App\View\Components\PostTable;
use App\View\Components\UserTable;
use Illuminate\Support\Facades\Route;
 
 

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth', 'verified'])->group(Function() {
     Route::get('/post' ,[PostTable::class, 'render'])->name('posts'); 
     Route::get('/user' ,[UserTable::class, 'render'])->name('users');
});

  

  

require __DIR__.'/settings.php';




