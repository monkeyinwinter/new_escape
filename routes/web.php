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

Route::prefix('region')->group(function () {
    Route::get('/', 'RegionController@index')->name('region.index');
    Route::get('/create', 'RegionController@create')->name('region.create');
    Route::post('/', 'RegionController@store')->name('region.store');
    Route::get('/{region}', 'RegionController@show')->name('region_show');
    Route::get('/{region}/edit', 'RegionController@edit')->name('region.edit');
    Route::post('/{region}', 'RegionController@update')->name('region.update');
    Route::get('/{region}/destroy', 'RegionController@destroy')->name('region.destroy');

    Route::get('{region}/departement/', 'DepartementController@index')->name('departement.index');
    Route::get('{region}/departement/create', 'DepartementController@create')->name('departement.create');
    Route::post('{region}/departement/', 'DepartementController@store')->name('departement.store');
    Route::get('{region}/departement/{departement}', 'DepartementController@show')->name('departement_show');
    Route::get('{region}/departement/{departement}/edit', 'DepartementController@edit')->name('departement.edit');
    Route::post('{region}/departement/{departement}', 'DepartementController@update')->name('departement.update');
    Route::get('{region}/departement/{departement}/destroy', 'DepartementController@destroy')->name('departement.destroy');
});



