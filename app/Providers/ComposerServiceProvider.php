<?php

namespace App\Providers;

use App\GuzzleHttp\ConnectAPI;
use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*','App\Http\ViewComposers\MenuComposer');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }
}
