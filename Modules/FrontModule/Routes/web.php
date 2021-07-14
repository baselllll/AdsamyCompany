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

Route::prefix('frontmodule')->group(function() {
    Route::get('/homepage', 'FrontModuleController@homepage')->name('homepage');
    Route::get('/works', 'FrontModuleController@works')->name('works');
    Route::get('/team', 'FrontModuleController@team')->name('team');
    Route::get('/services', 'FrontModuleController@services')->name('services');
    Route::get('/contact', 'FrontModuleController@contact')->name('contact');
    Route::get('/post', 'FrontModuleController@post')->name('post');
    Route::get('/blogs', 'FrontModuleController@blogs')->name('blogs');
    Route::get('/about', 'FrontModuleController@about')->name('about');
});
