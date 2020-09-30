<?php


namespace KSuzuki2016\LaravelJetstreamLangJa;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class LaravelJetstreamLangJaServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/lang' => $this->app->resourcePath('lang/'),
            ], 'jetstream-lang-ja') ;
        }
    }
}
