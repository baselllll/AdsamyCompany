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
             // ceospecahs index route
             Route::get('ceospecahs','CeoSpecahController@index')->name('ceospecahs.index');
             // ceospecahs create route
             Route::get('ceospecahs/create','CeoSpecahController@create')->name('ceospecahs.create');
             Route::post('ceospecahs/store','CeoSpecahController@store')->name('ceospecahs.store');
             // ceospecahs edit route
             Route::get('ceospecahs/edit/{id}','CeoSpecahController@edit')->name('ceospecahs.edit');
             Route::post('ceospecahs/update/{id}','CeoSpecahController@update')->name('ceospecahs.update');
             // ceospecahs delete route
             Route::get('ceospecahs/destroy/{id}','CeoSpecahController@destroy')->name('ceospecahs.destroy');
              ///////////////////////////////////////////////////////////
             // services index route
             Route::get('services','ServicesController@index')->name('services.index');
             // services create route
             Route::get('services/create','ServicesController@create')->name('services.create');
             Route::post('services/store','ServicesController@store')->name('services.store');
             // services edit route
             Route::get('services/edit/{id}','ServicesController@edit')->name('services.edit');
             Route::post('services/update/{id}','ServicesController@update')->name('services.update');
             // services delete route
             Route::get('services/destroy/{id}','ServicesController@destroy')->name('services.destroy');
              ///////////////////////////////////////////////////////////
             // works index route
             Route::get('works','WorksController@index')->name('works.index');
             // works create route
             Route::get('works/create','WorksController@create')->name('works.create');
             Route::post('works/store','WorksController@store')->name('services.store');
             // works edit works
             Route::get('works/edit/{id}','WorksController@edit')->name('works.edit');
             Route::post('works/update/{id}','WorksController@update')->name('works.update');
             // works delete route
             Route::get('works/destroy/{id}','WorksController@destroy')->name('works.destroy');
             ///////////////////////////////////////////////////////////
             // gallery index route
             Route::get('gallery','GalleryController@index')->name('gallery.index');
             // gallery create route
             Route::get('gallery/create','GalleryController@create')->name('gallery.create');
             Route::post('gallery/store','GalleryController@store')->name('gallery.store');
             // gallery edit works
             Route::get('gallery/edit/{id}','GalleryController@edit')->name('gallery.edit');
             Route::post('gallery/update/{id}','GalleryController@update')->name('gallery.update');
             // gallery delete route
             Route::get('gallery/destroy/{id}','GalleryController@destroy')->name('gallery.destroy');
             ///////////////////////////////////////////////////////////
             // clients index route
             Route::get('clients','ClientController@index')->name('clients.index');
             // clients create route
             Route::get('clients/create','ClientController@create')->name('clients.create');
             Route::post('clients/store','ClientController@store')->name('clients.store');
             // clients edit works
             Route::get('clients/edit/{id}','ClientController@edit')->name('clients.edit');
             Route::post('clients/update/{id}','ClientController@update')->name('clients.update');
             // clients delete route
             Route::get('clients/destroy/{id}','ClientController@destroy')->name('clients.destroy');
             ///////////////////////////////////////////////////////////
             // slider index route
             Route::get('sliders','SliderController@index')->name('sliders.index');
             // slider create route
             Route::get('sliders/create','SliderController@create')->name('sliders.create');
             Route::post('sliders/store','SliderController@store')->name('sliders.store');
             // slider edit works
             Route::get('sliders/edit/{id}','SliderController@edit')->name('sliders.edit');
             Route::post('sliders/update/{id}','SliderController@update')->name('sliders.update');
             // slider delete route
             Route::get('sliders/destroy/{id}','SliderController@destroy')->name('sliders.destroy');
             ///////////////////////////////////////////////////////////
             // teams index route
             Route::get('teams','TeamsController@index')->name('teams.index');
             // teams create route
             Route::get('teams/create','TeamsController@create')->name('teams.create');
             Route::post('teams/store','TeamsController@store')->name('teams.store');
             // teams edit works
             Route::get('teams/edit/{id}','TeamsController@edit')->name('teams.edit');
             Route::post('teams/update/{id}','TeamsController@update')->name('teams.update');
             // teams delete route
             Route::get('teams/destroy/{id}','TeamsController@destroy')->name('teams.destroy');
             ///////////////////////////////////////////////////////////
             // subscribes index route
             Route::get('subscribes','SubscribeController@index')->name('subscribes.index');
             // subscribes create route
             Route::get('subscribes/create','SubscribeController@create')->name('subscribes.create');
             Route::post('subscribes/store','SubscribeController@store')->name('subscribes.store');
             // subscribes edit works
             Route::get('subscribes/edit/{id}','SubscribeController@edit')->name('subscribes.edit');
             Route::post('subscribes/update/{id}','SubscribeController@update')->name('subscribes.update');
             // subscribes delete route
             Route::get('subscribes/destroy/{id}','SubscribeController@destroy')->name('subscribes.destroy');

              ///////////////////////////////////////////////////////////
             // contact index route
             Route::get('contacts','ContactsController@index')->name('contacts.index');
             Route::get('contacts/destroy/{id}','ContactsController@destroy')->name('contacts.destroy');
        });

});

