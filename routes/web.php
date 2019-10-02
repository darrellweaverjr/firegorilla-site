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

Route::get('/', function () {
    return view('business-solutions');
});
Route::get('/agency-solutions', function () {
    return view('agency-solutions');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/business-solutions', function () {
    return view('business-solutions');
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
// Route::get('/press', 'BlogController@press')->name('press');
