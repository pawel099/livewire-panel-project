<?php
 
use App\Models\Brands;
use App\View\Components\account;
use App\View\Components\categories;
use App\View\Components\editProduct;
use App\View\Components\orders;
use App\View\Components\ordersItem;
use Illuminate\Support\Facades\Route;
use App\View\Components\product;
use App\Http\Controllers\deletePost;
 
 

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth', 'verified'])->group(Function() {
Route::get('/product' ,[product::class, 'render'])->name('products'); 
Route::get('/edit/{id}' ,[Product::class, 'edit'])->name('edit');
Route::get('/delete/{product}' ,[product::class,'delete'])->name('delete');
Route::get('/categories' ,[categories::class, 'render'])->name('categories');
Route::get('/brands' ,[Brands::class, 'render'])->name('brands');
Route::get('/orders' ,[orders::class, 'render'])->name('orders');
Route::get('/ordersitem' ,[ordersItem::class, 'render'])->name('ordersitem');
Route::get('/account' ,[account::class, 'render'])->name('accounts');
});

require __DIR__.'/settings.php';




