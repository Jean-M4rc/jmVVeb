<?php

namespace App\Providers;

use App\Repositories\ProjectRepository;
use Illuminate\Support\Facades\Blade;
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
        //
    }

    /**
     * we can use @admin on view
     */
    public function boot()
    {
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->admin;
        });

        if (request()->server("SCRIPT_NAME") !== 'artisan') {
            view()->share('projects', resolve(ProjectRepository::class)->getAll());
        }
    }

}
