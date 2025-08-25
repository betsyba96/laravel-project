<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {  // url can be anything ex: xxx, while using hallo route it will redirect here
    return "Hello Page";
})->name(name: 'hello');

Route::get('/hallo', function () {
    return redirect()->route('hello');
});

Route::get('/hello/{name}', function ($name) {
    return "Hello ". $name.' ! ';
});

Route::fallback(function(){
    return "Still got somewhere!";      // redirect to the common page when it the route is not exists
});
