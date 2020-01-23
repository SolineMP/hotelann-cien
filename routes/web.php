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
Route::get('/showOne/{id}', 'UsersController@show')->name('showOne');
Route::post('/storeUser', 'UsersController@store')->name('storeUser');
Route::post('/user/{id}', 'UsersController@edit')->name('editUser');
Route::post('/updateUser/{id}', 'UsersController@update')->name('updateUser');
Route::post('/deleteUser/{id}', 'UsersController@deleteUser')->name('deleteUser');


/* ROUTE FOR ROOM */ 

Route::get('/rooms', 'RoomsController@index')->name('rooms'); 
Route::get('/createRoom', 'RoomsController@createRoom')->name('createRoom');
Route::post('/storeRoom', 'RoomsController@store')->name('storeRoom');
Route::post('/edit/{id}', 'RoomsController@edit')->name('editRoom');
Route::post('/updateRoom/{id}', 'RoomsController@update')->name('updateRoom');
Route::post('/deleteRoom/{id}', 'RoomsController@destroy')->name('deleteRoom');

/* ROUTE FOR BOOK */ 

Route::get('/books', 'BookController@index')->name('books');
Route::get('/createBook', 'BookController@createBook')->name('createBook');
Route::post('/storeBook', 'BookController@store')->name('storeBook');