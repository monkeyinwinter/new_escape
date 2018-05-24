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
    Route::get('/{region}/delete', 'RegionController@destroyShow')->name('region.deleteShow');
    Route::post('/{region}/destroy', 'RegionController@destroy')->name('region.destroy');
});

