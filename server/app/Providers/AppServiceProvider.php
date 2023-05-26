<?php

namespace App\Providers;

use App\Http\Interfaces\EletroRepositoryInterface;
use App\Http\Interfaces\EletroServiceInterface;
use App\Http\Repositories\EletroRepository;
use App\Http\Services\EletrodomesticoService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(EletroServiceInterface::class, EletrodomesticoService::class);
        $this->app->bind(EletroRepositoryInterface::class, EletroRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
