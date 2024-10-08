<?php

use App\Http\Controllers\PemainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pemain', function () {
    return view('index');
});
Route::get('/pemain', PemainController::class, 'index');
Route::post('/pemain', [PemainController::class, 'store'])->name('pemain.store');
