<?php

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
Auth::routes([
    'reset' => false,
]);

Route::middleware(['auth', 'is-admin'])->group(function () {
    Route::get('/dashboard', App\Livewire\Backend\Dashboard\Index::class)->name('dashboard');
    Route::get('/product', App\Livewire\Backend\Product\Index::class)->name('product');
    Route::get('/user', App\Livewire\Backend\User\Index::class)->name('user');
});

Route::get('/', function () {
    return view('welcome');
})->name('home');
