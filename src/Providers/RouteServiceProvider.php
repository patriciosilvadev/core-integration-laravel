<?php

namespace DigiSac\Base\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::group([
            'namespace' => 'DigiSac\Base\Http\Controllers'
        ], function () {
            $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        });

        Route::group([
            'namespace' => 'DigiSac\Base\Http\Controllers\Api',
            'prefix' => 'api/v1'
        ], function () {
            $this->loadRoutesFrom(__DIR__.'/../../routes/api.php');
        });
    }
}
