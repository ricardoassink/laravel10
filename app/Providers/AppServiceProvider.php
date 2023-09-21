<?php

namespace App\Providers;

use App\Repositories\{CursoEloquentORM};
use App\Repositories\{CursoRepositoryInterface};
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // onde injetar a interface, na verdade ele vai injetar a classe concreta CursoEloquentORM
        $this->app->bind(CursoRepositoryInterface::class, CursoEloquentORM::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
