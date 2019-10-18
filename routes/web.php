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
Route::resource('/', 'BusinessSolutionController');
Route::resource('/business-solutions', 'BusinessSolutionController');
Route::resource('/agency-solutions', 'AgencySolutionController');
Route::resource('/nonprofit-solutions', 'NonprofitSolutionController');
Route::post('/logout', 'AuthController@logout')->name('logout');

Route::get('/services', function () {
    return view('services');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/privacy-policy', function () {
    return view('privacy');
});
Route::get('/terms-of-service', function () {
    return view('terms');
});
Route::get('/resources', function () {
    return view('resources');
});
Route::get('/quick-guide', function () {
    return view('quick-guide');
});
// Route::get('/press', 'BlogController@press')->name('press');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
