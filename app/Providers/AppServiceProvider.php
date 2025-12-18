<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     * Use this to bind interfaces to their implementations.
     */
    public function register(): void
    {
        $this->app->bind(
            'App\Library\LibraryRepositoryInterface',
            'App\Library\DbLibraryRepository'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Fix for pagination styling (essential for Laravel Breeze/Tailwind)
        Paginator::useTailwind();

        // Optional: Fix for older MySQL migration index limits
        Schema::defaultStringLength(191);
    }
}
