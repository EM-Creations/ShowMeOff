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

// Pages
// Home page
Route::get('/', 'PageController@goToHome')->name('gotoHome');

// Illustrations page
Route::get('/illustrations/', 'PageController@goToIllustrations')->name('gotoIllustrations');
Route::get('/illustrations/{galleryID}', 'PageController@goToIllustrationsByGallery')->name('gotoIllustrationsByGallery');

// About page
Route::get('/about', 'PageController@goToAbout')->name('gotoAbout');

// Contact page
Route::get('/contact', 'PageController@goToContact')->name('gotoContact');

Route::resource('galleries', 'GalleryController');
Route::resource('images', 'ImageController');

Auth::routes();

// Logged in home page
Route::get('/home', 'HomeController@index')->name('home');
