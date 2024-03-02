<?php

namespace Aaran\Style\Providers;

use Illuminate\Support\ServiceProvider;

class StyleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config.php','style');

        $this->app->register(StyleRouteServiceProvider::class);
    }

}
