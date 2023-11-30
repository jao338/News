<?php

use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [NewController::class, 'index']);

Route::get('news/create', [NewController::class, 'create'])->middleware('auth');
Route::get('/news/search/', [NewController::class, 'search']);
Route::post('/news', [NewController::class, 'store'])->middleware('auth');
Route::put('/news/{id}', [NewController::class, 'update'])->middleware('auth');
Route::delete('/news/{id}', [NewController::class, 'destroy'])->middleware('auth');
Route::get('/news/{id}', [NewController::class, 'show']);
Route::get('/news/edit/{id}', [NewController::class, 'edit'])->middleware('auth');
Route::get('/dashboard', [NewController::class, 'dashboard'])->middleware('auth');


require __DIR__.'/auth.php';
