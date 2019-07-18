<?php

namespace Rkecka\Bonopay;

use Illuminate\Support\ServiceProvider;

class BonopayServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->mergeConfigFrom( __DIR__ . '/config/bonopay.php', 'bonopay');
        $this->publishes([ __DIR__ . '/config/bonopay.php' => config_path('bonopay.php') ]);
    }

    public function register()
    {
    }

}