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

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $u = \App\User::query()->create([
        'username' => 'admin',
        'password' => '123456'
    ]);
    return $u;
});

Route::namespace('Frontend')->group(function () {
//    Route::get('/', 'IndexController@index');
    Route::get('schedule', 'ScheduleController@view');
    Route::get('schedule/{id}', 'ScheduleController@detail');

    Route::get('base', 'BaseController@view');
    Route::get('base/{id}', 'BaseController@detail');


});

