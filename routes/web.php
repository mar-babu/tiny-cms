<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('frontend.index');
});
Route::get('/', 'PostController@index');

Auth::routes();

Route::group(['middleware' => ['web', 'auth']], function () {
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');



Route::get('post/list', 'PostController@index');
Route::get('post/create', 'PostController@create');
Route::post('post/store', 'PostController@store');

});

