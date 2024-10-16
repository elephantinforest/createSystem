<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use League\CommonMark\Environment\Environment;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

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
      \Illuminate\Support\Facades\Schema::defaultStringLength(191);

      if (App::environment(['production'])) {
            URL::forceScheme('https');
        }
    }
}
