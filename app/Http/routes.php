<?php

Route::get('/', 'HomeController@index');

Route::post('tumblet/create', 'TumbletController@storeAndRedirect');

Route::get('{tumblrname}', 'TumbletController@show');