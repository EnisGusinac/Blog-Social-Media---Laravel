<?php

Route::get('/', function () {
    if (Route::has('login'))
        return view('welcome');
    else
        return view('home');
});


Route::get('/profile', 'ProfileController@profileRoute');
Route::post('profile', 'ProfileController@update_avatar');
// Route::get('/profile/{username}', 'ProfileController@profile');

//
//Route::get('posts', 'PostsController@image');
//Route::post('posts', 'PostsController@update_image');



Route::post('posts/like/{post}', 'PostsController@likePost')->name('posts.like');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'AdminController@index');


Route::resource('posts', 'PostsController');

Route::get('posts/{post}', 'PostsController@show')->name('posts.show');
Route::get('posts/{post}/edit', 'PostsController@edit')->name('posts.edit');
