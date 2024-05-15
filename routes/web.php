<?php

use App\Http\Controllers\librarian\LoginController as LibrarianLoginController;
use App\Http\Controllers\librarian\ViewListController as LibrarianViewListController;
use App\Http\Controllers\librarian\AddBookController as LibrarianAddBookController;
use App\Http\Controllers\librarian\ViewBorrowedController as LibrarianViewBorrowedController;


use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;


use App\Http\Controllers\ListController;
use App\Http\Controllers\AddBookController;
use App\Http\Controllers\AvailableBookController;
use App\Http\Controllers\ViewBorrowedController;
use App\Http\Controllers\ViewListController;
use App\Http\Controllers\BookInfoController;


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
Route::get('librarian/dashboard', [LibrarianViewListController::class, 'viewList'])->name('librarian.dashboard');
Route::post('librarian/authenticate', [LibrarianLoginController::class, 'authenticate'])->name('librarian.authenticate');
Route::get('librarian/logout', [LibrarianLoginController::class, 'logout'])->name('librarian.logout');
Route::get('librarian/add', [LibrarianAddBookController::class, 'viewAdd']);
Route::post('librarian/add', [LibrarianAddBookController::class, 'addBook'])->name('librarian.add');
Route::get('librarian/borrowed', [LibrarianViewBorrowedController::class,'viewBorrowed']);



Route::get('/add', [AddBookController::class, 'viewAdd']);
Route::post('/add', [AddBookController::class, 'addBook'])->name('add.books');
Route::get('/available', [AvailableBookController::class,'viewAvailable']);
Route::get('/borrowed', [ViewBorrowedController::class,'viewBorrowed']);
Route::get('/list',[ListController::class, 'viewList']);
Route::post('/book/{id}', [BookInfoController::class, 'clickableCard'])->name('book.show');
Route::get('/book/{id}', [BookInfoController::class, 'clickableCard'])->name('book.show');






