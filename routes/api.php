<?php

use App\Http\Controllers\AlarmController;
use App\Http\Controllers\MonoController;
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
    Route::get('get-comments', 'App\Http\Controllers\CommentsController@getComments');
    Route::post('set-comment', 'App\Http\Controllers\CommentsController@setComment');
    Route::post('send-complain', 'App\Http\Controllers\CommentsController@sendComplain');
    // air alarms
    Route::post('air-alarms-handler', [AlarmController::class, 'webhook'])->name('air-alarms');
    // mono transactions
    Route::get('transaction-3Fv72kLzQ9mEjpA8gXrMnT5bY1dUcWoN', [MonoController::class, 'webhookCheck'])->name('mono-check');
    Route::post('transaction-3Fv72kLzQ9mEjpA8gXrMnT5bY1dUcWoN', [MonoController::class, 'webhook'])->name('mono-transactions');
});
