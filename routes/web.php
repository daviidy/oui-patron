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
    return view('services');
});

Route::get('/metier', function () {
    return view('accueil');
});

Route::get('/plomberie', function () {
    return view('jobs.plomberie');
});

Route::get('/menuiserie', function () {
    return view('jobs.menuiserie');
});


Route::resource('demandes','DemandeController');

Route::resource('jobs','JobController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
