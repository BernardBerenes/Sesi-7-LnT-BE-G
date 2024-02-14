<?php

use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', [BookController::class, 'viewPage'])->name('viewPage');
Route::get('/book/add', [BookController::class, 'addPage'])->name('addPage');
Route::post('/book/store', [BookController::class, 'store'])->name('store');
Route::get('/book/edit/{id}', [BookController::class, 'editPage'])->name('editPage');
Route::patch('/book/update/{id}', [BookController::class, 'updateBook'])->name('updateBook');
Route::delete('/book/delete/{id}', [BookController::class, 'deleteBook'])->name('deleteBook');