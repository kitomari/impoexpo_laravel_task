<?php

use App\Http\Controllers\LinksController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/welcome', function () {return view('welcome');});
Route::post('/short', 'UrlController@store');
Route::get('/short/{link}', 'UrlController@shortLinks');
Route::get('/home', 'UrlController@index')->name('home');
Route::get('/view_link/{id}', 'UrlController@viewLink')->name('view_link');
Route::get('/edit_url/{id}', 'UrlController@editLink')->name('edit_url');
Route::post('/update_link/{id}', 'UrlController@updateUrl');
Route::get('/delete_url/{id}', 'UrlController@destroy');
Route::get('/disable_url/{id}', 'UrlController@disableLink');

Route::get('/view_profile/{id}', 'ProfileController@index');
Route::post('/update_profile/{id}', 'ProfileController@update');



