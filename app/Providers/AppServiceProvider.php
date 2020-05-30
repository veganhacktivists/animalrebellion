<?php

namespace App\Providers;

use App\Models\AboutPage;
use App\Models\Event;
use App\Models\JoinPage;
use App\Models\LocalGroup;
use App\Observers\EventObserver;
use App\Observers\LocalGroupObserver;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use OpenCage\Geocoder\Geocoder;

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

        //** Register OpenCage Geocoder class */
        $this->app->bind('Geocoder', function () {
            return new Geocoder(config('services.opencage.api_key'));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with('aboutPages', AboutPage::where(['published' => true])->get());
            $view->with('joinPages', JoinPage::where(['published' => true])->get());
        });

        Event::observe(EventObserver::class);
        LocalGroup::observe(LocalGroupObserver::class);
    }
}
