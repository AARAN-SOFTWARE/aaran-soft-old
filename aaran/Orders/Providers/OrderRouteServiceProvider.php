<?php

namespace Aaran\Orders\Providers;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class OrderRouteServiceProvider extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('web')
                ->group(__DIR__.'/../routes.php');
        });
    }

}
