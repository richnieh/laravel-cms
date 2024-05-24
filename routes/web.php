<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('bootstrap', function(){
    return view('bootstrap');
});

Route::get('insertuser/{name}/{email}/{pass}', function($name, $email, $pass){
    return User::create(['name'=>$name,'email'=>$email, 'password'=>$pass]);
});

Route::group(['middleware'=>'web'], function(){
    Route::resource('posts', PostController::class);
    Route::get('date', function (){
        $date = new DateTime();
        echo $date->format('d-m-Y')."<br />";
        echo Carbon::now()->diffForHumans()."<br />";
        echo Carbon::now()->addDays(10)->diffForHumans()."<br />";
        echo Carbon::now()->subMonths(2)->diffForHumans()."<br />";
        echo Carbon::now()->yesterday()->diffForHumans()."<br />";
    });
});

Route::get('getname', function(){
    $user = User::findOrFail(1);

    return $user->name;
});

Route::get('setname/{id}/{name}', function($id, $name){
    $user = User::findOrFail($id);

    $user->name = $name;
    $user->save();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
