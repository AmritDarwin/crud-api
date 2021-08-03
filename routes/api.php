<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/book', [BookController::class,'create']);
Route::get('/book', [BookController::class,'index']);
Route::get('/editbook/{id}', [BookController::class,'edit']);
Route::put('/updatebook/{id}', [BookController::class,'update']);
Route::delete('/deletebook/{id}', [BookController::class,'destroy']);
