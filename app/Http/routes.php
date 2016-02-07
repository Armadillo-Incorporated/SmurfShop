<?php

Route::get('/', 'AccountsController@index');

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::resource('accounts', 'AccountsController');

    Route::resource('digits', 'DigitsController');

    Route::resource('ranks', 'RanksController');
});
