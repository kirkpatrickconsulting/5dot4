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

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'Front\FrontController@showFront');
Route::get('/contact', 'Front\ContactController@showContact');
Route::post('/contact', 'MailController@mailContact');

Route::get('/dashboard', 'Back\DashboardController@showDashboard');
Route::get('/weather', 'Back\WeatherController@showWeather');
Route::get('/blankpage', 'Back\BlankpageController@showBlankpage');

Route::resource('users', 'UserController');
Route::resource('urls', 'UrlController');

/*
 * 
 * Route::get('/', function () {
 *  return view('welcome');
 * });
 * 
 */

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

/*
 *
 *
 * 
 * 
 * 
 * Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
 * 
 * Route::get('/blankpage', 'Back\BlankpageController@showBlankpage');
 * Route::get('/links', 'Back\LinksController@showLinks');
 * Route::get('/weather', 'Back\WeatherController@showWeather');
 * 
 * 
 * 
 * 
 */
