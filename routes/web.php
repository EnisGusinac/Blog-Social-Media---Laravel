<?php

Route::get('/', function () {
    if (Route::has('login'))
        return view('welcome');
    else
        return view('home');
});


Route::get('/profile', 'ProfileController@profileRoute');
Route::post('profile', 'ProfileController@update_avatar');


Route::get('test-admin', 'ProfileController@testAdmin');
Route::get('users', 'ProfileController@users');

Auth::routes();

Route::get('/home', 'HomeController@index');

// Routes for POSTS
Route::prefix('posts')->group(function() {
    Route::resource('/', 'PostsController');
    Route::get('/{post}', 'PostsController@show')->name('posts.show');
    Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
    Route::post('/like/{post}', 'PostsController@likePost')->name('posts.like');
});
// Routes for COMMENTS
//Route::prefix('comments')->group(function() {
    Route::resource('comments', 'CommentsController');
//    Route::get('/{comment}', 'CommentsController@show')->name('comments.show');
//    Route::get('/{comment}/edit', 'CommentsController@edit')->name('comments.edit');
//    Route::post('/like/{comment}', 'CommentsController@likeComment')->name('comments.like');
//});

//Route::prefix('admin')->group(function() {
//    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//    Route::get('/profile', 'AdminController@profile')->name('admin.profile');
//    Route::get('/', 'AdminController@index')->name('admin.dashboard');
//});


