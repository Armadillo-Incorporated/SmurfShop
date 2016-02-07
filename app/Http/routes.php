<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::resource('account', 'AccountController');

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    // Route::get('/home', 'HomeController@index');
});
