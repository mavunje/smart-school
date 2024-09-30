<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Services\StudentService; // Import the StudentService
use Illuminate\Support\Facades\View;

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
        Paginator::useBootstrapFive();

        // View composer to share StudentService with all views
        View::composer('*', function ($view) {
            $view->with('studentService', app(StudentService::class)); // Inject the StudentService
        });
    }
}
