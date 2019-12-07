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
    return view('Home');
})->name('post');



Route::get('/post', 'services_post@index')->name('show.post');

Route::get('/post/delete/{id}', 'services_post@destroy')->name('delete.post');
Route::get('/post/deleteall/', 'services_post@destroyall')->name('deleteall.post');
Route::post('/post/store/', 'services_post@store')->name('store.post');
Route::get('/post/edit/{id}', 'services_post@edit')->name('edit.post');