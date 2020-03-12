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

Route::get('/Avatar','AvatarController@index')->name('avatar');
Route::get('/AvatarAdd','AvatarController@create')->name('Addavatar');
Route::post('/saveAvatar','AvatarController@store')->name('saveavatar');
Route::get('/AvatarEdit/{id}','AvatarController@edit')->name('editavatar');
Route::post('/updateavatar/{id}','AvatarController@update')->name('updateavatar');
Route::get('/deleteavatar/{id}','AvatarController@destroy')->name('destroyavatar');






Route::get('/User','UserController@index')->name('user');
Route::get('/UserAdd','UserController@create')->name('Adduser');
route::post('/saveUser','UserController@store')->name('saveuser');
route::get('/Useredit/{id}','UserController@edit')->name('edituser');
route::post('/upadteuser/{id}','UserController@update')->name('updateuser');
route::get('/deleteuser/{id}','UserController@destroy')->name('destroyuser');


