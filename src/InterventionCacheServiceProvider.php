<?php
namespace SiCoUK\InterventionCache;

use Illuminate\Support\ServiceProvider;

class InterventionCacheServiceProvider extends ServiceProvider
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
    public function register()
    {
        //
        $this->app->bind('InterventionCache', function()
        {
            return new \SiCoUK\InterventionCache\Cache;
        });
    }
}
