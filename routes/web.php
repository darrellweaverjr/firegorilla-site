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
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/privacy-policy', function () {
    return view('privacy');
});
Route::get('/terms-of-service', function () {
    return view('terms');
});
Route::get('/quick-guide', function () {
    return view('quick-guide');
});
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::resource('/', 'BusinessSolutionController');
Route::resource('/business-solutions', 'BusinessSolutionController');
Route::resource('/agency-solutions', 'AgencySolutionController');
Route::resource('/nonprofit-solutions', 'NonprofitSolutionController');
Route::resource('/resources', 'ResourcesController');
Route::get('/all/resources', 'ResourcesController@allresources')->name('resources.all');
Route::resource('/services', 'ServicesController');
Route::get('/all/services', 'ServicesController@allServices')->name('services.all');


// Route::get('/press', 'BlogController@press')->name('press');

Route::get('/home', 'HomeController@index')->name('home');
