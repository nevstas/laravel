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

Route::group(['middleware' => 'language'],function () {
    Auth::routes();
});

Route::get('/profile', 'App\Http\Controllers\UserController@edit')->name('profile.edit')->middleware(['language', 'auth']);
Route::put('/profile', 'App\Http\Controllers\UserController@update')->name('profile.update')->middleware(['language', 'auth']);

Route::get('/', 'App\Http\Controllers\ContactController@index')->name('contacts.index')->middleware('language');
Route::get('/contacts/{contact}', 'App\Http\Controllers\ContactController@show')->name('contacts.show')->middleware('language');

Route::view('/about', 'about')->name('about')->middleware('language');

Route::resource('member/contacts', 'App\Http\Controllers\MemberContactController', ['names' => 'member.contacts'])->middleware(['language', 'auth']);
Route::get('member/contacts/{contact}/logs', 'App\Http\Controllers\LogController@logs')->name('logs.index')->middleware(['language', 'auth']);

Route::get('change_language/{language}', 'App\Http\Controllers\SystemController@changeLanguage')->name('system.change_language');

