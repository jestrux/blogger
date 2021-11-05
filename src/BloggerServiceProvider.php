<?php

namespace Jestrux\Blogger;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Jestrux\Blogger\View\Components\Data;
use Jestrux\Blogger\View\Components\Read;

// use Jestrux\Blogger\Blogger;

class BloggerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerResources();

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('blogger.php'),
            ], 'blogger-config');
    
            $this->publishes([
                __DIR__.'/../resources/assets' => public_path('blogger'),
            ], 'blogger-assets');
        }
    }

    /**
     * Register the package resources.
     *
     * @return void
     */
    private function registerResources()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'blogger');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadViewComponentsAs('blogger', [
            Data::class,
            Read::class,
        ]);
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'blogger');
        $this->registerRoutes();
    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    protected function registerRoutes()
    {
        // Route::redirect('/blogger-admin', '/blogger/editor');
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    protected function routeConfiguration(){
        $prefix = config('blogger.prefix');
        $middleware = config('blogger.middleware');
        
        $configs = [];
        if($prefix) $configs['prefix'] = $prefix;
        if($middleware) $configs['middleware'] = $middleware;
        
        return $configs;
    }
}
