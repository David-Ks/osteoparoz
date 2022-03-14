<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers;

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

Route::get('/', "MainController@home") -> name('home');

Auth::routes();

Route::prefix('/adpanel')->middleware('auth')->group(function () {
	Route::get('/', "MainController@adminPanel") -> name('adpanel');

	Route::post('/changecontacts', "MainController@changeContacts") -> name('change.contacts');
	Route::post('/changesettings', "MainController@changesettings") -> name('change.settings');

    Route::post('/changeteam/{id}', "MainController@changeteam") -> name('change.team');
	Route::post('/delteam/{id}', "MainController@delteam") -> name('del.team');
	Route::post('/createteam', "MainController@createTeam") -> name('create.team');

	Route::post('/changenews/{id}', "MainController@changenews") -> name('change.news');
	Route::post('/delnews/{id}', "MainController@delnews") -> name('del.news');
	Route::post('/createnews', "MainController@createnews") -> name('create.news');

	Route::post('/changeservice/{id}', "MainController@changeservice") -> name('change.service');
	Route::post('/delservice/{id}', "MainController@delservice") -> name('del.service');
	Route::post('/createservice', "MainController@createservice") -> name('create.service');

	Route::post('/delgallery/{id}', "MainController@delgallery") -> name('del.gallery');
	Route::post('/creategallery', "MainController@creategallery") -> name('create.gallery');

	Route::post('/changevideo/{id}', "MainController@changevideo") -> name('change.video');
	Route::post('/delvideo/{id}', "MainController@delvideo") -> name('del.video');
	Route::post('/createvideo', "MainController@createvideo") -> name('create.video');

	Route::post('/changesocial/{id}', "MainController@changesocial") -> name('change.social');
	Route::post('/delsocial/{id}', "MainController@delsocial") -> name('del.social');
	Route::post('/createsocial', "MainController@createsocial") -> name('create.social');
});

Route::get('/home', function () {
    return redirect()->route('home');
});

