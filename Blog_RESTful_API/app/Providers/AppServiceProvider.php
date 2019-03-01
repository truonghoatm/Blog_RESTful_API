<?php

namespace App\Providers;

use App\Http\Repository\BlogRepository;
use App\Http\Repository\Impl\BlogRepositoryImpl;
use App\Http\Service\BlogService;
use App\Http\Service\Impl\BlogServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
          BlogRepository::class,
            BlogRepositoryImpl::class
        );
        $this->app->singleton(
            BlogService::class,
            BlogServiceImpl::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
