<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "This is a custom route file, registed in RouteServiceProvider.php";
});


Route::get('/common-variable', function () {
    return view('custom');
});
