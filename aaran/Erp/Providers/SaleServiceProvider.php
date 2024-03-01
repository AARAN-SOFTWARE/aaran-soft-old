<?php

namespace Aaran\Entries\Providers;

use Illuminate\Support\ServiceProvider;

class SaleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config.php','master');

        $this->app->register(SaleRouteServiceProvider::class);
    }

}
