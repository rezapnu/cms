<?php

namespace Cms;


use Cms\Middleware\Admin;
use Illuminate\Support\ServiceProvider;
use function foo\func;

class CmsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('cms', function () {
            return new Cms();
        });

        $this->mergeConfigFrom(__DIR__.'/Config/main.php','cms');
    }

    public function boot()
    {
        require 'Routes.php';

        $this->loadViewsFrom(__DIR__.'/Views','cms');

        //$this->app['router']->middleware('admin',\Cms\Middleware\Admin::class);

        $this->publishes([
            __DIR__.'/Config/main.php'=> config_path('cms.php'),
            __DIR__.'/Views'=> base_path('/resources/views/cms'),
            __DIR__.'/Migrations'=> database_path('/migrations'),
        ]);





    }

}
