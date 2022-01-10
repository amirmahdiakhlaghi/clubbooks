<?php

namespace App\Providers;

use App\Models\Like;
use App\Observers\AddLikesObserver;
use Illuminate\Support\ServiceProvider;

class ModelObserverProvider extends ServiceProvider
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
        Like::observe(AddLikesObserver::class);
    }
}
