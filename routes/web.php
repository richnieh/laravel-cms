<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware'=>'web'], function(){
    Route::resource('posts', PostController::class);
});
