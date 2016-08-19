<?php

Route::post('person/store', 'PersonController@store');
Route::post('car/store', 'CarController@store');

Route::get('/', 'CarController@datos');
