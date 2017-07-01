<?php

Route::get('/', function () {
    if (Route::has('login'))
        return view('welcome');
    else
        return view('home');
});


Route::get('/profile', 'ProfileController@profileRoute');
Route::post('profile', 'ProfileController@update_avatar');
Route::get('/profile/{username}', 'ProfileController@profile');

Route::resource('posts', 'PostsController');




Auth::routes();

Route::get('/home', 'HomeController@index');


