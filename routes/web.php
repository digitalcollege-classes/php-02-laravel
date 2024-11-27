<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/add', [HomeController::class, 'add']);

Route::get('/teste', function () {
    return view('teste'); //teste.blade.php
});
