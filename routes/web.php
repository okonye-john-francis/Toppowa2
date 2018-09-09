<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homeDisplay');
});

Route::get('/problem', function () {
    return view('problem');
});

Route::get('/solution', function () {
    return view('solution');
});

Route::get('/team', function () {
    return view('team');
});