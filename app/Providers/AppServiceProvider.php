<?php

namespace App\Providers;

use App\Search\Content;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

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
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Content::bootSearchable();

        Carbon::setLocale(
            config('app.locale') == 'ua' ? 'uk' : config('app.locale')
        );
    }
}
