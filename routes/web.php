<?php
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
Route::get('/reports/voters','ReporterController@voters')->name('reports.voters');
Route::get('/reports/leaders','ReporterController@leaderVoters')->name('reports.leaders');
Route::get('/reports/{leader}','ReporterController@votersLeader')->name('reports.voters.leader');

Route::post('/config/sms','ConfigController@storeSms')->name('config.sms');
Route::get('/config','ConfigController@index')->name('config');
