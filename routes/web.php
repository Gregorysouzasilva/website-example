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

//Route::get('/{page}', function () {
//    return view('welcome');
//});

Route::get('/send', 'EmailNovidades@send');
Route::get('/import', 'ScraperController@index');

Auth::routes();

Route::middleware(['pagina'])->group(function () {
    Route::get('/{page}/{id}', 'IndexController@indexId');
    Route::get('/{page}', 'IndexController@index');
});