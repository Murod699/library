<?php

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
    return view('index');
})->name('index');

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/', function(){
        return view('admin.dashboard');
    })->name('dashboard');

    //BooksCategory route
    Route::resource('books/category', App\Http\Controllers\Admin\BooksCategoryController::class);
    //Authors route
    Route::resource('/authors', App\Http\Controllers\Admin\AuthorsController::class);
    //Books route
    Route::resource('books', App\Http\Controllers\Admin\BooksController::class);
});