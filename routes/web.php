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


Route::get('/master', function () {
    return view('frontend.master');
})->name('master');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


//For Frontend
Route::get('/','frontend\FrontendController@index');
Route::get('mydawei','frontend\FrontendController@about_dawei')->name('mydawei');
Route::get('about','frontend\FrontendController@about');
Route::get('contact','frontend\FrontendController@contact');
Route::get('guide','frontend\FrontendController@guide');
Route::get('details/{id}','frontend\FrontendController@details')->name('details');
Route::get('ticketshop','frontend\FrontendController@ticketshop');
Route::get('places_lists/{id}','frontend\FrontendController@places_lists')->name('places_lists');

Route::resource('listings','frontend\ListingController');
Route::resource('listingdetails','frontend\ListingDetailsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// For Backend 
Route::get('dashboard','backend\BackendController@index')->name('dashboard');
Route::resource('placetypes','backend\PlacetypeController');
Route::resource('places','backend\PlaceController');
Route::resource('tickets','backend\TicketController');



