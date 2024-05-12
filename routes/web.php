<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/library', function () {
    return view('library');
});


Route::get('/dashboard', function () {
    return view('dashboard');
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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

