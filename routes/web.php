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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* ROUTE FOR USER */ 

Route::get('/users', 'UsersController@showUsers')->name('users');
Route::get('/createUser', 'UsersController@createUser')->name('createUser');
Route::post('/storeUser', 'UsersController@store')->name('storeUser');
Route::post('/edit/{id}', 'UsersController@edit')->name('editUser');
Route::post('/updateUser/{id}', 'UsersController@update')->name('updateUser');
Route::post('/deleteUser/{id}', 'UsersController@deleteUser')->name('deleteUser');