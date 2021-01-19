<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use KgBot\LaravelLocalization\Facades\ExportLocalizations as ExportLocalization;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Schema::defaultStringLength(191);

        View::composer( 'layouts.template', function ( $view ) {
            return $view->with( [
                'messages' => ExportLocalization::export()->toArray(),
                'language' => SESSION::get('locale'),
            ] );
        } );
    }
}
