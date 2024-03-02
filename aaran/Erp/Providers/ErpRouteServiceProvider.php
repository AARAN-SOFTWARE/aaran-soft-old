<?php

namespace Aaran\Erp\Providers;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class ErpRouteServiceProvider extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('web')
                ->group(__DIR__.'/../routes.php');
        });
    }

}
