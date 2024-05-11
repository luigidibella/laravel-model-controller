<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
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

Route::get('/',[PageController::class, 'index'])->name('home');

Route::get('/title', [PageController::class, 'title'])->name('title');

Route::get('/date', [PageController::class, 'date'])->name('date');

Route::get('/vote', [PageController::class, 'vote'])->name('vote');



