<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'DashboardController@index');

Route::get('/jobseekers', 'JobSeekersController@index');
Route::get('getjobseekers', [
    'uses' => 'JobSeekersController@getjobseekers',
    'as' => 'ajax.get.data.jobseekers',
]);
Route::post('/jobseekers/insert','JobSeekersController@insert');
