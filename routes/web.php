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
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users','UserController');
Route::resource('leaders','LeaderController');
Route::resource('voters','VoterController');
Route::group(['prefix'=>'campain'],function (){
    Route::resource('points','PointController');
    Route::resource('sectors','SectorController');
});
Route::get('/reports','ReporterController@index')->name('reports.index');
