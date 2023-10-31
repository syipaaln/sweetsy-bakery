<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.wel');
});

Auth::routes();

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/user', [HomeController::class, 'index'])->name('user');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
});
Route::middleware(['auth', 'user-access:penjual'])->group(function () {
    Route::get('/penjual', [HomeController::class, 'penjual'])->name('penjual');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// require __DIR__.'/auth.php';

// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('/admin');
// Route::get('/user', [App\Http\Controllers\AdminController::class, 'index'])->name('/user');

//produk
Route::get('/home/produk', [ProdukController::class, 'index'])->name('/home/produk/index');
Route::get('/home/produk/create', [ProdukController::class, 'create'])->name('/home/produk/create');
Route::get('/home/produk/edit/{id}', [ProdukController::class, 'edit'])->name('home.produk.edit');
Route::get('/home/produk/index/delete/{id}', [ProdukController::class, 'delete']);
Route::post('/home/produk-post', [ProdukController::class, 'post'])->name('home.produk.post');

