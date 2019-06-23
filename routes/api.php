<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('auth')->group(function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::get('info', 'AuthController@info');
    Route::post('refresh', 'AuthController@refresh');
});

Route::middleware(['jwt.auth'])->namespace('Admin')->group(function () {
    Route::get('schedule/{id?}', 'ScheduleController@show');
    Route::delete('schedule/{id?}', 'ScheduleController@remove');
    Route::post('schedule', 'ScheduleController@create');

    Route::get('banner/{id?}', 'BannerController@show');
    Route::post('banner', 'BannerController@create');

    Route::get('booking/{id?}', 'BookingApplicationController@show');
    Route::post('booking/create', 'BookingApplicationController@create');


    Route::get('category/{id?}', 'ScheduleTypeController@show');
    Route::delete('category/{id?}', 'ScheduleTypeController@remove');
    Route::post('category/create', 'ScheduleTypeController@create');

    Route::get('base/{id?}', 'BaseInfoController@show');
    Route::post('base/create', 'BaseInfoController@create');

    Route::get('partner/{id?}', 'PartnerController@show');
    Route::post('partner/create', 'PartnerController@create');

    Route::get('case/{id?}', 'CaseController@show');
    Route::post('case/create', 'CaseController@create');
});