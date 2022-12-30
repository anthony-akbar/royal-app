<?php

use App\Http\Controllers\ClientsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mobile.home');
});
Route::group(['prefix'=>'clients'], function () {
    Route::get('/', [ClientsController::class, 'index'])->name('clients');
    Route::post('/store', [ClientsController::class, 'store'])->name('clients.store');
    Route::get('/{id}', [ClientsController::class, 'show'])->name('clients.show');
});
