<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello Page";
});

Route::get('/hallo', function () {
    return redirect('/hello');
});

Route::get('/hello/{name}', function ($name) {
    return "Hello ". $name.' ! ';
});
