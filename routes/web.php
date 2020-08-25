<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/personal', function () {
    return view('personal');
})->name('personal');

Route::post(
    '/login/submit',
    'UserController@login'
)->name('login-submit');

Route::post(
    '/register/submit',
    'UserController@register'
)->name('register-submit');
