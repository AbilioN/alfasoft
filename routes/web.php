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

Route::get('/' , 'ContactController@index')->name('contact.index');
Route::get('contact/edit/{contactId}' , 'ContactController@edit')->name('contact.edit');
Route::get('contact/detail/{contactId}' , 'ContactController@detail')->name('contact.detail');
Route::get('contact/create' , 'ContactController@createView')->name('contact.create.view');
Route::post('contact/create' , 'ContactController@create')->name('contact.create');
Route::post('contact/delete' , 'ContactController@delete')->name('contact.delete');

