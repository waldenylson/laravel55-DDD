<?php namespace TIOp\Support\Providers;

use Codecasts\Support\Units\ServiceProvider;

class SupportServiceProvider extends ServiceProvider
{
    protected $alias = 'support';

    protected $hasViews = true;

    //protected $hasTranslations = true;

    protected $providers = [
        //RouteServiceProvider::class,
    ];
}
