<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    // dd(app());
    // return view('welcome');

    app()->make('custom_service_provider');

    echo "<br>";

    cache()->put('name', 'Mridul Kar');
    echo cache()->get('name');

});

Route::resource('post', PostController::class);
