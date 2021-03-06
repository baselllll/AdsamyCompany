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

// index route

use Faker\Test\Provider\LocalizationTest;

Route::prefix('admin-panel')->group(function() {
    Route::get('/login-admin', function(){
        return view('common::index');
    
    })->middleware('adminauth');
});
