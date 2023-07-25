<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        // Using a view composer to share the $user variable with header.blade.php
        View::composer('admin.body.header', function ($view) {
            // Retrieve the user data
            $user = User::query()->where('id', Auth::user()->id)->first();

            // Pass the user data to the view
            $view->with('user', $user);
        });
    }
}
