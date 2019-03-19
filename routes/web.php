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
Route::get('/analysis', 'AnalysisController@index');

Route::prefix('employees')->group(function () {
    Route::get('/','EmployeeController@index')->name('employees.index');
    Route::get('/create','EmployeeController@create')->name('employee.create');
    Route::post('/store','EmployeeController@store')->name('employee.store');
    Route::get('/edit/{id}','EmployeeController@edit')->name('employee.edit');
    Route::patch('/update/{id}','EmployeeController@update')->name('employee.update');
    Route::get('/show/{id}','EmployeeController@show')->name('employee.show');
    Route::delete('/destroy/{id}','EmployeeController@destroy')->name('employee.destroy');
});