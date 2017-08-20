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
    return view('callerForm');
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/callerForm', 'HomeController@viewCallerForm');
Route::get('/Activity', 'HomeController@viewActivity')->middleware('auth');
Route::get('/manageUsers', 'HomeController@manageIT')->middleware('auth');

Route::post('addUser', [
		'uses'=>'users@addUserCommit',
		'as'=>'newUser'
	]);
Route::post('updateUser', [
		'uses'=>'users@UpdateUserCommit',
		'as'=>'updateUser'
	]);

Route::post('saveCaller', [
		'uses'=>'caller@saveCallerForm',
		'as'=>'saveCaller'
	]);

Route::post('getActivities', [
		'uses'=>'caller@getActiviesCommit',
		'as'=>'getActivities'
	]);

Route::post('StopActivity', [
		'uses'=>'caller@StopActivityCommit',
		'as'=>'StopActivity'
	]);



