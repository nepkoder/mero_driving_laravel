<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/{name?}', function ($name) {
    $demo = 'Hello World';
    $data = compact('name','demo');
    return view('home')->with($data);

});