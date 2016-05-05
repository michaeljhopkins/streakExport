<?php

namespace Sexport\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Sexport\StreakApi\Streak;
use Sexport\StreakApi\StreakFacade;

class StreakServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Boot the service provider.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/streak.php' => config_path('streak.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('streak_api', function ($app) {
            $token = (!\Auth::guest()) ? \Auth::user()->token : '1234';
            return new Streak($token, $app['config']['services']['streak']['url']);
        });

        $this->app->bind('Xvize\Streak\Streak', function ($app) {
            $token = (!\Auth::guest()) ? \Auth::user()->token : '1234';
            return new Streak($token, $app['config']['services']['streak']['url']);
        });

        $loader = AliasLoader::getInstance();
        $loader->alias('Streak', StreakFacade::class);
    }
    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [];
    }
}
