<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('home');
});
Route::get('/tutorial', function () {
    return view('home');
});
Route::get('/reference', function () {
    return view('home');
});
Route::get('/forum', function () {
    return view('forums.main');
});

Route::get('/forum/content', function () {
    return view('forums.content');
});
Route::get('/profile', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auths.login');
});

Route::get('/register', function () {
    return view('auths.register');
});