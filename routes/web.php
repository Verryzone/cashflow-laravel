<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.app');
});
Route::get('/login', function () {
    return view('page.login.index');
});
