<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/about', function () {
    return view('about', [
        "title" => "about us",
        "name" => "John Doe"
    ]);
});

Route::get('/layout', function () {
    return view('layouts.layout');
});

Route::get('/login', function () {
    return view('login');
});

// Route::get('/posts', [PostController::class, 'index']);

// retrieve book data
Route::get('/book', [BookController::class, 'index']);

// link to 'create book' (create.blade.php) view
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');

// route to save data
Route::post('/book', [BookController::class, 'store'])->name('book.store');

// route to delete data
Route::delete('/book{id}', [BookController::class, 'destroy'])->name('book.destroy');

// route to edit data
Route::post('/book/{id}/edit', [BookController::class, 'edit'])->name('book.edit');

// route to update edited data
Route::put('/book/{id}/update', [BookController::class, 'update'])->name('book.update');

// route for search
Route::get('/book/search', 'BookController@search')->name('book.search');

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::post('/logout', 'logout')->name('logout');
    });
});

Route::get('/send-mail', [SendEmailController::class, 'index'])->name('send-email');

Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');

Route::get('/send-email', function () {
    return view('send-mail');
});