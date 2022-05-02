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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'App\Http\Controllers\PagesController@mainPage')->name('main-page');
Route::get('/portfolio/{slug}', 'App\Http\Controllers\PagesController@portfolio')->name('portfolio');
Route::get('/blog/{slug}', 'App\Http\Controllers\PagesController@blog')->name('blog');
Route::get('/sitemap', 'App\Http\Controllers\SitemapController@visual')->name('sitemap-view');
Route::get('/sitemap.xml', 'App\Http\Controllers\SitemapController@index')->name('sitemap');
Route::get('/{slug}', 'App\Http\Controllers\PagesController@page')->name('page');

Route::get('login/{provider}', 'App\Http\Controllers\Auth\AuthController@redirectToProvider')->name('login');
Route::get('{provider}/callback', 'App\Http\Controllers\Auth\AuthController@handleProviderCallback');
Route::post('/logout', 'App\Http\Controllers\Auth\AuthController@logout');
