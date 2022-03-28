<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\ServiceProvider;

class ModulesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->servicesTags();
    }

    public function servicesTags()
    {
        \View::composer('modules.services-tags', function ($view){
            $view->with('services', Service::all());
        });
    }
}
