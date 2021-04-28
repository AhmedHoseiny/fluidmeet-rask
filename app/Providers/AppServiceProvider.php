<?php

namespace App\Providers;

use App\Repositories\Contracts\PharmacyRepositoryInterface;
use App\Repositories\EloquentPharmacyRepository;
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
        $this->app->bind(PharmacyRepositoryInterface::class, EloquentPharmacyRepository::class);
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
