<?php

namespace App\User\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../../Presentation/route.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Migrations');
    }
}
