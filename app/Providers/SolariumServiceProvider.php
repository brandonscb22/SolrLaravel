<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SolariumServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    protected $defer = true;

    /**
     * Register any application services.
     *
     * @return  void
     */
    public function register()
    {
        $this->app->bind(Client::class, function ($app) {
            return new Client(Config::get('solarium'));
        });
    }

    public function provides()
    {
        return [Client::class];
    }
}
