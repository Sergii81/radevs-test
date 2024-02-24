<?php

namespace App\Providers;

use App\Interfaces\Repositories\TestRepositoryInterface;
use App\Interfaces\Repositories\UserRepositoryInterface;
use App\Repositories\TestRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerRepositories();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    /**
     * @return void
     */
    private function registerRepositories(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(TestRepositoryInterface::class, TestRepository::class);
    }
}
