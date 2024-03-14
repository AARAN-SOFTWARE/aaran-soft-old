<?php

namespace Aaran\Attendance\Providers;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class AttendanceRouteServiceProvider extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('web')
                ->group(__DIR__.'/../routes.php');
        });
    }

}
