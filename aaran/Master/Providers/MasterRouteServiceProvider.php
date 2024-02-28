<?php

namespace Aaran\Master\Providers;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class MasterRouteServiceProvider extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('web')
                ->group(__DIR__.'/../routes.php');
        });
    }

}
