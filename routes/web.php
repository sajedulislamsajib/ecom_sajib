<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('product/', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('product/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::put('product/{product}/update', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::delete('product/{product}/destroy', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');





    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

