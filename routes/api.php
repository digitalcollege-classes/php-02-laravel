<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\StoreApiController;

Route::get('/lanchonetes', [StoreApiController::class, 'getList']);
Route::get('/lanchonetes/{id}', [StoreApiController::class, 'getOne']);
Route::post('/lanchonetes', [StoreApiController::class, 'create']);
Route::patch('/lanchonetes/{id}', [StoreApiController::class, 'update']);
Route::delete('/lanchonetes/{id}', [StoreApiController::class, 'remove']);
