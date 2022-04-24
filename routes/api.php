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

// V1 API
Route::group(['prefix' => 'v1'], function () {
    // Захват лидов
    Route::post('send-lead', 'App\Http\Controllers\LeadsController@addLead');
    Route::post('send-vacancy', 'App\Http\Controllers\VacanciesController@addVacancy');
    Route::get('get-rating', 'App\Http\Controllers\RatingController@getRating');
    Route::post('set-rating', 'App\Http\Controllers\RatingController@setRating');
});
