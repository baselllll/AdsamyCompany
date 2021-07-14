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

Route::group(['prefix' => 'admin-panel/widgets'],function () {
    Route::group(['middleware' => 'adminauth'], function () {
            // blog index route
            Route::get('blog','BlogsController@index')->name('blog.index');
            // blog create route
            Route::get('blog/create','BlogsController@create')->name('blog.create');
            Route::post('blog/store','BlogsController@store')->name('blog.store');
            // blog edit route
            Route::get('blog/edit/{id}','BlogsController@edit')->name('blog.edit');
            Route::post('blog/update/{id}','BlogsController@update')->name('blog.update');
            // blog delete route
            Route::get('blog/destroy/{id}','BlogsController@destroy')->name('blog.destroy');
            ///////////////////////////////////////////////////////////
             // blog index route
             Route::get('ceospecahs','CeoSpecahController@index')->name('ceospecahs.index');
             // blog create route
             Route::get('ceospecahs/create','CeoSpecahController@create')->name('ceospecahs.create');
             Route::post('ceospecahs/store','CeoSpecahController@store')->name('ceospecahs.store');
             // blog edit route
             Route::get('ceospecahs/edit/{id}','CeoSpecahController@edit')->name('ceospecahs.edit');
             Route::post('ceospecahs/update/{id}','CeoSpecahController@update')->name('ceospecahs.update');
             // blog delete route
             Route::get('ceospecahs/destroy/{id}','CeoSpecahController@destroy')->name('ceospecahs.destroy');
    
        });

});

