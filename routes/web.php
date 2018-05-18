<?php



Route::get('/', 'CaesController@inicio');

Route::resource('caes', 'CaesController');