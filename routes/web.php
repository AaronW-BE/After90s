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
//    $u = \App\User::query()->create([
//        'username' => 'admin',
//        'password' => '123456'
//    ]);
//    return $u;
});

Route::namespace('Frontend')->group(function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('schedule.html', 'ScheduleController@view')->name('schedule.list');
    Route::get('schedule/{id}.html', 'ScheduleController@detail')->name('schedule.detail');

    Route::get('base-explore.html', 'BaseController@view')->name('base.list');
    Route::get('base-explore/{id}.html', 'BaseController@detail')->name('base.detail');
});

