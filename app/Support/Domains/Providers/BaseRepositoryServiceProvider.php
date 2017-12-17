<?php namespace TIOp\Support\Domains\Providers;

use Illuminate\Support\ServiceProvider;

class BaseRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRepositories();
    }

    public function registerRepositories()
    {
        $repos = [
            \TIOp\Domains\Users\Contracts\UserRepository::class => \TIOp\Domains\Users\Repositories\UserRepository::class,
        ];

        foreach ($repos as $contract => $repo)
        {
            $this->app->singleton($contract, $repo);
        }
    }
}
