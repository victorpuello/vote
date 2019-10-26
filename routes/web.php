<?php
Route::get('/', function () {
    return view('front.home');
});

Auth::routes();
Route::get('validar', 'TestigoController@ValidateTestigo')->name('validar.testigo');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users','UserController');
Route::post('search','SearchController')->name('search');

Route::resource('leaders','LeaderController');
Route::resource('candidates','CandidateController');


Route::resource('voters','VoterController')->except('show');
Route::get('voters/{id}','VoterController@show')->name('voter.show');
Route::put('voters/sufragar/{voter}', 'VoterController@sufragar')->name('voter.sufragar');

Route::group(['prefix'=>'campain'],function (){
    Route::resource('points','PointController');
    Route::resource('tables','TableController');
    Route::resource('sectors','SectorController');
    Route::resource('message','MessageController');
});
Route::group(['prefix'=>'votation'],function (){
    Route::get('votations/getFiltro','VotationController@getFiltro')->name('votations.getfiltro');
    Route::get('asignacions/create/{id}','AsignacionController@create')->name('asignacions.create');
    Route::get('e14/getFiltro','E14Controller@getFiltro')->name('e14.getfiltro');
    Route::get('tacking','TrackingController@index')->name('tracking.index');
    Route::get('tacking/leaders','TrackingController@leaders')->name('tracking.leaders');
    Route::get('tacking/leaders/sendNotification/{leader}','TrackingController@sendNotification')->name('tracking.leaders.notification');
    Route::get('tacking/leaders/sendNotifications/','TrackingController@sendAllNotification')->name('tracking.leaders.notifications');
    Route::get('tacking/reset','TrackingController@reset')->name('tracking.counts.reset');
    Route::resource('votations','VotationController');
    Route::resource('e14','E14Controller');
    Route::resource('testigos','TestigoController');
    Route::resource('asignacions','AsignacionController')->except('create');
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

