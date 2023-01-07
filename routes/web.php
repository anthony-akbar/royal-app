<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mobile.home');
})->name('home');
Route::group(['prefix'=>'clients'], function () {
    Route::get('/', [ClientsController::class, 'index'])->name('clients');
    Route::post('/store', [ClientsController::class, 'store'])->name('clients.store');
    Route::get('/{id}', [ClientsController::class, 'show'])->name('clients.show');
});
Route::group(['prefix'=>'products'], function () {
   Route::get('/', [ProductsController::class, 'index'])->name('products');
});
Route::group(['prefix'=>'sales'], function () {
   Route::get('/', [SalesController::class, 'index'])->name('sales');
});
