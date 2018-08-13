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
    //Route::get('/{region}', 'RegionController@show')->name('region_show');
    Route::get('/{region}/edit', 'RegionController@edit')->name('region.edit');
    Route::post('/{region}', 'RegionController@update')->name('region.update');
    Route::get('/{region}/destroy', 'RegionController@destroy')->name('region.destroy');


    Route::get('{region}/departement/', 'DepartementController@index')->name('departement.index');

    Route::get('{region}/departement/json', 'DepartementController@json')->name('departement.json');

    Route::get('{region}/departement/create', 'DepartementController@create')->name('departement.create');
    Route::post('{region}/departement/', 'DepartementController@store')->name('departement.store');
    //Route::get('{region}/departement/{departement}', 'DepartementController@show')->name('departement_show');
    Route::get('{region}/departement/{departement}/edit', 'DepartementController@edit')->name('departement.edit');
    Route::post('{region}/departement/{departement}', 'DepartementController@update')->name('departement.update');
    Route::get('{region}/departement/{departement}/destroy', 'DepartementController@destroy')->name('departement.destroy');


    Route::get('{region}/departement/{departement}/ville/', 'VilleController@index')->name('ville.index');

    Route::get('{region}/departement/{departement}/json', 'VilleController@json')->name('ville.json');

    Route::get('{region}/departement/{departement}/ville/create', 'VilleController@create')->name('ville.create');
    Route::post('{region}/departement/{departement}/ville/', 'VilleController@store')->name('ville.store');
    //Route::get('{region}/departement/{departement}/ville/{ville}', 'VilleController@show')->name('ville_show');
    Route::get('{region}/departement/{departement}/ville/{ville}/edit', 'VilleController@edit')->name('ville.edit');
    Route::post('{region}/departement/{departement}/ville/{ville}', 'VilleController@update')->name('ville.update');
    Route::get('{region}/departement/{departement}/ville/{ville}/destroy', 'VilleController@destroy')->name('ville.destroy');

    Route::get('{region}/departement/{departement}/ville/{ville}/spot/', 'SpotController@index')->name('spot.index');
    Route::get('{region}/departement/{departement}/ville/{ville}/spot/create', 'SpotController@create')->name('spot.create');
    Route::post('{region}/departement/{departement}/ville/{ville}/spot/', 'SpotController@store')->name('spot.store');
    //Route::get('{region}/departement/{departement}/ville/{ville}/spot/{spot}', 'SpotController@show')->name('ville_show');
    Route::get('{region}/departement/{departement}/ville/{ville}/spot/{spot}/edit', 'SpotController@edit')->name('spot.edit');
    Route::post('{region}/departement/{departement}/ville/{ville}/spot/{spot}', 'SpotController@update')->name('spot.update');
    Route::get('{region}/departement/{departement}/ville/{ville}/spot/{spot}/destroy', 'SpotController@destroy')->name('spot.destroy');

    Route::get('{region}/departement/{departement}/ville/{ville}/spot/{spot}/voie', 'VoieController@index')->name('voie.index');
    Route::get('{region}/departement/{departement}/ville/{ville}/spot/{spot}/voie/create', 'VoieController@create')->name('voie.create');
    Route::post('{region}/departement/{departement}/ville/{ville}/spot/{spot}/voie/', 'VoieController@store')->name('voie.store');
    //Route::get('{region}/departement/{departement}/ville/{ville}/spot/{spot}', 'VoieController@show')->name('voie_show');
    Route::get('{region}/departement/{departement}/ville/{ville}/spot/{spot}/voie/{voie}/edit', 'VoieController@edit')->name('voie.edit');
    Route::post('{region}/departement/{departement}/ville/{ville}/spot/{spot}/voie/{voie}', 'VoieController@update')->name('voie.update');
    Route::get('{region}/departement/{departement}/ville/{ville}/spot/{spot}/voie/{voie}/destroy', 'VoieController@destroy')->name('voie.destroy');

    Route::get('{region}/departement/{departement}/ville/{ville}/spot/{spot}/voie/{voie}/showOneVoie/', 'VoieController@showOneVoie')->name('voie.showOneVoie');
    Route::post('{region}/departement/{departement}/ville/{ville}/spot/{spot}/voie/{voie}/showOneVoie/', 'VoieController@saveImageVoie')->name('voie.saveImageVoie');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
