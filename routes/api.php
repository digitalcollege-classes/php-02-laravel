<?php

use App\Http\Controllers\Api\DrinkApiController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\StoreApiController;

Route::get('/lanchonetes', [StoreApiController::class, 'getList']);
Route::get('/lanchonetes/{id}', [StoreApiController::class, 'getOne']);
Route::post('/lanchonetes', [StoreApiController::class, 'create']);
Route::patch('/lanchonetes/{id}', [StoreApiController::class, 'update']);
Route::delete('/lanchonetes/{id}', [StoreApiController::class, 'remove']);

Route::get('/drinks', [DrinkApiController::class, 'getList']);
Route::get('/drinks/{id}', [DrinkApiController::class, 'getOne']);
Route::post('/drinks', [DrinkApiController::class, 'create']);
Route::patch('/drinks/{id}', [DrinkApiController::class, 'update']);
Route::delete('/drinks/{id}', [DrinkApiController::class, 'remove']);