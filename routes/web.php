<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user','UserController');

Route::get('/bonus', function () {
    return view('bonus.test1');
});

Route::get('/bonus2', function () {
    return view('bonus.test2');
});

