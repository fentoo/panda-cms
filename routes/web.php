<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return "Hi! Welcome to using " . config('app.name') . ", Current env is " . App::environment();
});

Route::get('user/{user}', function (\App\Models\User $user){
    return $user->email;
});

Auth::routes();

Route::get('/home', 'HomeController@index');
