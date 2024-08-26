<?php

use Illuminate\Support\Facades\Route;

// Route for welcome page
/*Route::get('/', function () {
    return view('welcome');
});*/

//Route for home page
Route::get('/', function () {
    return view('home');
});

// Route for about page
Route::get('/about', function () {
    return view('about');
});

//Route for content page
Route::get('/content', function () {
    return view('content');
});