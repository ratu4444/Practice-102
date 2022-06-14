<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserinfoController;
use App\Http\Controllers\BooksController;
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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/info', [UserinfoController::class, 'addUser']);

// Route::get('/getreq', [UserinfoController::class, 'saveUser']);

Route::get('/show', [BooksController::class, 'create'])->name('form');

Route::post('/add', [BooksController::class, 'store'])->name('add-books');

