<?php

namespace Aaran\Entries\Providers;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class SaleRouteServiceProvider extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('web')
                ->group(__DIR__.'/../routes.php');
        });
    }

}
