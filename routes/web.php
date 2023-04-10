<?php

use Illuminate\Http\Request;

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

use App\Http\Controllers\NewController;


Route::get('/', [NewController::class, 'index']);
Route::get('/noticias/create', [NewController::class, 'create']);
Route::get('/noticias/information/{id}', [NewController::class, 'show']);
Route::delete('/noticias/{id}', [NewController::class, 'destroy']);

Route::get('/noticias/edit/{id}', [NewController::class, 'edit']);
Route::put('/noticias/update/{id}', [NewController::class, 'update']);

Route::post('/noticias', [NewController::class, 'store']);
