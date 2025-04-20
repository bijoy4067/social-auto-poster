<?php

namespace SocialPoster;

use Illuminate\Support\ServiceProvider;
use SocialPoster\Social\FacebookConfig;

class SocialPosterServiceProvider extends ServiceProvider
{
    public $providers = [
        FacebookConfig::class,
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        // $this->commands([
        //     Build::class,
        // ]);

        foreach ($this->providers as $provider) {
            if (method_exists($provider, 'register')) {
                $this->app->register($provider);
            }
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // include __DIR__ . '/Supports/helpers.fn.php';
        // foreach ($this->providers as $provider) {
        //     if (method_exists($provider, 'boot')) {
        //         $provider::boot();
        //     }
        // }
    }
}
