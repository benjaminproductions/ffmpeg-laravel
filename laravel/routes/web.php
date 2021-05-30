<?php

use Illuminate\Support\Facades\Route;

Route::get('/' , [
    'uses' => 'FFmpegController@show'
]);

Route::get('/store' , [
    'uses' => 'FFmpegController@store'
]);
