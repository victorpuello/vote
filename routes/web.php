<?php
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users','UserController');
Route::post('search','SearchController')->name('search');

Route::resource('leaders','LeaderController');

Route::get('voters/{id}','VoterController@show')->name('voter.show');
Route::put('voters/sufragar/{voter}', 'VoterController@sufragar')->name('voter.sufragar');
Route::resource('voters','VoterController')->except('show');
Route::group(['prefix'=>'campain'],function (){
    Route::resource('points','PointController');
    Route::resource('sectors','SectorController');
    Route::resource('message','MessageController');
});
Route::get('/reports','ReporterController@index')->name('reports.index');
Route::get('/reports/voters','ReporterController@voters')->name('reports.voters');
Route::get('/reports/leaders','ReporterController@leaderVoters')->name('reports.leaders');
Route::get('/reports/{leader}','ReporterController@votersLeader')->name('reports.voters.leader');

Route::post('/config/sms','ConfigController@storeSms')->name('config.sms');
Route::get('/config','ConfigController@index')->name('config');

Route::get('marcado', function () {
    return view('auxiliar.voters.index');
})->name('marcado');

