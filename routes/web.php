<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
Auth::routes();
Route::get('user/logout', function () {
    if (Auth::check()) {
        Auth::logout();
        Session::flush(); // clear all section
        return Redirect::route('login');
    } else {
        return Redirect::route('register');
    }
})->name('custom-logout');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::resource('customers', 'CustomerController');
Route::get('galleries/{customer}/upload', 'GalleryController@showFormUpload')->name('galleries.upload');
Route::resource('galleries', 'GalleryController');
Route::resource('events', 'EventController');
Route::resource('feedbacks', 'FeedbackController')->only([
    'index'
]);
