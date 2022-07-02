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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/blog', 'IndexController@blog')->name('blog');
Route::get('/blog/{id}', 'IndexController@blogDetail')->name('blogDetail');
Route::post('/cmt', 'IndexController@cmt')->name('cmt');
Route::post('/send-mail', 'IndexController@sendMail')->name('send.mail');
Route::post('/send-mess', 'IndexController@sendMess')->name('send.mess');

Route::get('/admin', 'Admin\HomeController@index')->name('admin.home');
Route::post('/admin/login', 'Admin\HomeController@login')->name('admin.login');
Route::get('/admin/register', 'Admin\HomeController@register')->name('admin.register');
Route::prefix('/admin')->name('admin.')->middleware('auth:admin')->namespace('Admin')->group(function () {
    Route::get('/logout', 'HomeController@logout')->name('logout');
    Route::get('profile', 'ProfileController@edit')->name('profile.edit');
    Route::put('profile', 'ProfileController@update')->name('profile.update');
    Route::put('profile/password', 'ProfileController@password')->name('profile.password');
    Route::get('upgrade', function () {
        return view('pages.upgrade');
    })->name('upgrade');
    Route::get('map', function () {
        return view('pages.maps');
    })->name('map');
    Route::get('icons', function () {
        return view('pages.icons');
    })->name('icons');
    Route::get('table-list', function () {
        return view('pages.tables');
    })->name('table');

    Route::resources([
        'user' => UserController::class,
        'sub' => SubController::class,
        'post' => PostController::class,
    ]);
});

