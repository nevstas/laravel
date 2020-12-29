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

Route::group(['middleware' => 'language'],function () {
    Auth::routes();
});

Route::get('/profile', 'UserController@edit')->name('profile.edit')->middleware(['language', 'auth']);
Route::put('/profile', 'UserController@update')->name('profile.update')->middleware(['language', 'auth']);

Route::get('/', 'ContactController@index')->name('contacts.index')->middleware('language');
Route::get('/contacts/{contact}', 'ContactController@show')->name('contacts.show')->middleware('language');

Route::view('/about', 'about')->name('about')->middleware('language');

Route::resource('member/contacts', 'MemberContactController', ['names' => 'member.contacts'])->middleware(['language', 'auth']);
Route::get('member/contacts/{contact}/logs', 'LogController@logs')->name('logs.index')->middleware(['language', 'auth']);

Route::get('change_language/{language}', 'SystemController@changeLanguage')->name('system.change_language');

