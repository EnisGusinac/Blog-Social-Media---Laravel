<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use Auth;
use App\Comment;
use App\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        //Share 'user' with all views
        View::composer('*', function ($view){
            $view->with('user', Auth::user());
        });

        //Share 'comments' with all views
        View::composer('*', function ($view){
            $view->with('comments', Comment::all());
        });

        //Share 'posts' with all views
        View::composer('*', function ($view){
            $view->with('posts', Post::latest()->paginate(10));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
