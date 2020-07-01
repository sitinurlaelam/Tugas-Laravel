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

/* LATIHAN DR VIDEO
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{angka}', function ($angka) {
    return view('test', ["angka"=>$angka]);
});

Route::get('/halo/{nama}', function ($nama) {
    return "halo $nama ";
});

Route::get('/form', 'RegisterController@form');

Route::get('/sapa', 'RegisterController@sapa'); */


// TUGAS LARAVEL

Route::get('/', function (){
    return view('home');
});

Route::get('/register', function (){
    return view('register');
});

Route::get('/welcome', function (){
    return view('welcom');
});

Route::get('/home', 'HomeController@home');
Route::get('/register', 'AuthController@register');
Route::get('/welcom', 'AuthController@welcom');