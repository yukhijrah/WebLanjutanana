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
    return view('home');
});
Route::get('/Home2', function () {
    return view('/resources/views/Home2.blade.php');
});
Route::get('/Profile', function () {
    return view('/resources/views/Profile.blade.php');
});
Route::get('/Kontak', function () {
    return view('/resources/views/Kontak.blade.php');
});