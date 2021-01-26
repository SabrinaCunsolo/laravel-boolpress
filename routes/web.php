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
//Homepage pubblica
Route::get('/', 'HomeController@index')->name('index');
Route::get('/contatti', 'HomeController@contatti')->name('contatti');
Route::get('/posts', 'PostController@index')->name('posts.index');

Auth::routes(['register' => false]);

//Tutte le rotte inserite in questo gruppo hanno il nome che inizia con admin. es. admin.index
Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function() {

    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('/posts', 'PostController');
});
