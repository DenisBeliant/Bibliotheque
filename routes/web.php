<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/livres', 'LivresController@index')->name('livres')->middleware('auth');

// Route::get('/emprunts', 'EmpruntsController@index')->name('emprunts')->middleware('auth');

// Route::get('/pret', 'PretController@show')->name('pret')->middleware('auth');

Route::resource('pret', 'PretController');
Route::resource('emprunts', 'EmpruntsController');
Route::resource('emprunteur', 'EmprunteurController');
Route::resource('livres', 'LivresController');