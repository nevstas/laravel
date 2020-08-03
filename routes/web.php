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
    Route::resource('contacts', 'ContactController')->only([
        'index', 'show'
    ]);
    Route::get('/', 'ContactController@index')->name('contacts.index');
    Route::view('/about', 'about')->name('about');
    Route::get('member/contacts/{contact_id}/logs', 'LogController@logs')->name('logs.index');
    Auth::routes();
    Route::group(['middleware' => 'auth'],function ()
    {
        Route::view('/profile', 'profile')->name('profile');
        Route::resource('member/contacts', 'MemberContactController', ['names' => 'member.contacts']);
        Route::get('member', 'MemberContactController@index')->name('member.contacts.index');
    });

});

Route::get('change_language/{language}', 'SystemController@changeLanguage')->name('system.change_language');

