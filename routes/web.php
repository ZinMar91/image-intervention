<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/test-vue', function (){
    return view('vue-component-test');
});
Route::get('/welcome', function (){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('marketing-image', 'MarketingImageController');

Route::get('/', 'PagesController@index')->name('home');
