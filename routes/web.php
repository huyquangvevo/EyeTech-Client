<?php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::resource('customers', 'CustomerController');
Route::resource('events', 'EventController');
