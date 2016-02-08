<?php

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'AccountsController@index');

    Route::get('dashboard', 'AccountsController@dashboard');

    Route::resource('accounts', 'AccountsController');

    Route::resource('digits', 'DigitsController');

    Route::resource('ranks', 'RanksController');
});
