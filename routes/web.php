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

Route::get('/short', function () {return view('welcome');});
Route::post('/short', 'UrlController@store');
Route::get('/short/{link}', 'UrlController@shortLinks');
Route::get('/home', 'UrlController@index')->name('home');
Route::get('/view_link/{id}', 'UrlController@viewLink')->name('view_link');
Route::get('/edit_url/{id}', 'UrlController@editLink')->name('edit_url');
Route::post('/update_link/{id}', 'UrlController@updateUrl')->name('update_link');

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/view_all_links', 'LinksController@index')->name('view_all_links');
// Route::get('/view_link/{id}', 'LinksController@viewLink')->name('view_link');
// Route::get('/edit_url/{id}', 'LinksController@editLink')->name('edit_url');
Route::post('/generate_link', 'LinksController@store')->name('generate_link');
// Route::post('/update_link/{id}', 'LinksController@updateUrl')->name('update_link');
// Route::get('{link}', 'LinksController@shortLink')->name('local.link');
// Route::group([], function(){
//     Route::get('/', 'LinksController@index')->name('index');
//     Route::post('generate_link','LinksController@store')->name('generate_link');
// });


