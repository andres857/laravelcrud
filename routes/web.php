<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/clients', [App\Http\Controllers\ClientController::class, 'index'])->name('clients.index');

