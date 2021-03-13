<?php
namespace Tecnolaw\File;

use Illuminate\Support\ServiceProvider;

class FileServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        //$this->loadTranslationsFrom(__DIR__.'/resources/lang', 'guxShop');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        //$this->loadViewsFrom(__DIR__.'/resources/views', 'guxShop');
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
