<?php

namespace App\Providers;

use App\Services\BirdService;
use Illuminate\Support\ServiceProvider;

class BirdServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(BirdService::class, function ($app) {
            return new BirdService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
