<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\Models\AboutPage;
use App\Models\Event;
use App\Observers\EventObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::share('aboutPages', AboutPage::all());
        Event::observe(EventObserver::class);
    }
}
