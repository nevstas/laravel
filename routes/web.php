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

Route::group(['middleware' => 'language'],function ()
{
    Route::resource('contacts', 'ContactController');
    Route::get('/', 'ContactController@index')->name('contacts.index');
    Route::view('/about', 'contact_about')->name('contacts.about');
    Route::get('contacts/{contact_id}/logs', 'LogController@logs')->name('logs.index');
});



Route::get('change_language/{language}', 'SystemController@changeLanguage')->name('system.change_language');
