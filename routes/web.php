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


Route::get('/', function () {
    return view('welcome');
});


route::get('/list', 'RegionController@list')->name('region.list');


Route::prefix('region')->group(function () {

    Route::get('/', 'RegionController@index')->name('region.index');
    Route::get('/create', 'RegionController@create')->name('region.create');
    Route::post('/', 'RegionController@store')->name('region.store');
    Route::get('/{region}/edit', 'RegionController@edit')->name('region.edit');
    Route::post('/{region}', 'RegionController@update')->name('region.update');
    Route::get('/{region}/destroy', 'RegionController@destroy')->name('region.destroy');


    Route::prefix('{region}/departement')->group(function () {

        Route::get('/', 'DepartementController@index')->name('departement.index');
        Route::get('/json', 'DepartementController@json')->name('departement.json');
        Route::get('/create', 'DepartementController@create')->name('departement.create');
        Route::post('/store', 'DepartementController@store')->name('departement.store');
        Route::get('{departement}/edit', 'DepartementController@edit')->name('departement.edit');
        Route::post('{departement}', 'DepartementController@update')->name('departement.update');
        Route::get('{departement}/destroy', 'DepartementController@destroy')->name('departement.destroy');


        Route::prefix('{departement}/ville')->group(function () {

            Route::get('/', 'VilleController@index')->name('ville.index');
/*            Route::get('/json', 'VilleController@json')->name('ville.json');*/
            Route::get('/create', 'VilleController@create')->name('ville.create');
            Route::post('/store', 'VilleController@store')->name('ville.store');
            Route::get('{ville}/edit', 'VilleController@edit')->name('ville.edit');
            Route::post('/{ville}', 'VilleController@update')->name('ville.update');
            Route::get('{ville}/destroy', 'VilleController@destroy')->name('ville.destroy');


            Route::prefix('{ville}/spot')->group(function () {

                Route::get('/', 'SpotController@index')->name('spot.index');
                Route::get('/create', 'SpotController@create')->name('spot.create');
                Route::post('/store', 'SpotController@store')->name('spot.store');
                Route::get('{spot}/edit', 'SpotController@edit')->name('spot.edit');
                Route::post('{spot}/update', 'SpotController@update')->name('spot.update');
                Route::get('{spot}/destroy', 'SpotController@destroy')->name('spot.destroy');


                Route::prefix('{spot}/voie')->group(function () {

                    Route::get('/', 'VoieController@index')->name('voie.index');
                    Route::get('/create', 'VoieController@create')->name('voie.create');
                    Route::post('/store', 'VoieController@store')->name('voie.store');
                    Route::get('{voie}/edit', 'VoieController@edit')->name('voie.edit');
                    Route::post('/{voie}/update', 'VoieController@update')->name('voie.update');
                    Route::get('{voie}/destroy', 'VoieController@destroy')->name('voie.destroy');

                    Route::get('{voie}/showOneVoie/', 'VoieController@showOneVoie')->name('voie.showOneVoie');
                    Route::post('{voie}/showOneVoie/', 'VoieController@saveImageVoie')->name('voie.saveImageVoie');

                });

            });

        });

    });

});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/monprofil', 'UserController@index')->name('user.index');
Route::get('/index/mesposts', 'PostController@mesposts')->name('post.mesposts');


Route::get('/region/{region}/departement/{departement}/ville/{ville}/spot/{spot}/spotPostList', 'PostController@spotPostList')->name('spot.spotPostList');
Route::get('/region/{region}/departement/{departement}/ville/{ville}/spot/{spot}/spotPostCreate', 'PostController@spotPostCreate')->name('spot.spotPostCreate');
Route::post('/region/{region}/departement/{departement}/ville/{ville}/spot/{spot}/', 'PostController@spotPostStore')->name('spot.spotPostStore');

// Route::get('user/', 'UserController@show')->name('user.index');
Route::get('post/index', 'PostController@index')->name('post.index');
Route::get('post/create', 'PostController@create')->name('post.create');
Route::post('post/store', 'PostController@store')->name('post.store');
Route::get('post/{post}/edit', 'PostController@edit')->name('post.edit');
Route::post('post/update/{post}', 'PostController@update')->name('post.update');
Route::get('post/{post}/destroy', 'PostController@destroy')->name('post.destroy');