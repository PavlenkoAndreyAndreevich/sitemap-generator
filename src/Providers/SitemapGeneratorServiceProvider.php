<?php

namespace PavlenkoAndrey\SitemapGenerator\Providers;

use Illuminate\Support\ServiceProvider;
use PavlenkoAndrey\SitemapGenerator\Console\Commands\GenerateSitemap;

class SitemapGeneratorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->loadViewsFrom(__DIR__.'/../resources/views', 'sitemap-generator');

            $this->publishes([
                __DIR__.'/resources/views' => resource_path('views/vendor/sitemap-generator'),
            ]);

            $this->commands([
                GenerateSitemap::class,
            ]);
        }

    }
}
