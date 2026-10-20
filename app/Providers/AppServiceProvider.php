<?php

namespace App\Providers;

use App\Repositories\AnimalRepository;
use App\Repositories\IAnimalRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->scoped(IAnimalRepository::class, AnimalRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
