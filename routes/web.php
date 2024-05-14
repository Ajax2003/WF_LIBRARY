<?php

use App\Http\Controllers\librarian\LoginController as LibrarianLoginController;
use App\Http\Controllers\librarian\DashboardController as LibrarianDashboardController;

use App\Http\Controllers\AddBookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/library', function () {
    return view('library');
});


Route::get('/dashboard', function () {
    return view('user.dashboard');
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/borrowed', function () {
    return view('borrowed');
});

Route::get('/returned', function () {
    return view('returned');
});

Route::get('/add', function () {
    return view('add');
});

Route::group(['prefix' => 'account'], function() {
    //Guest Middleware
    Route::group(['middleware' => 'guest'], function() {
        Route::get('login', [LoginController::class, 'index'])->name('account.login');
        Route::get('register', [LoginController::class, 'register'])->name('account.register');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
        Route::post('process-register', [LoginController::class, 'processRegister'])->name('account.processRegister');
    });
    //Authenticated Middleware
    Route::group(['middleware' => 'auth'], function() {
        Route::get('logout', [LoginController::class, 'logout'])->name('account.logout');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('account.dashboard');
    });
    
});

Route::get('librarian/login', [LibrarianLoginController::class, 'index'])->name('librarian.login');
Route::get('librarian/dashboard', [LibrarianDashboardController::class, 'index'])->name('librarian.login');
Route::post('librarian/authenticate', [LibrarianLoginController::class, 'authenticate'])->name('librarian.authenticate');




Route::get('/add', [AddBookController::class, 'viewAdd']);
Route::post('/add', [AddBookController::class, 'addBook'])->name('add.books');






