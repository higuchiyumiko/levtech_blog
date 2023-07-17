<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illiminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //サービスコンテナへの登録のみを行う
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
