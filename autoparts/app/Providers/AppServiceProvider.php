<?php

namespace App\Providers;

use App\Models\Blogs;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


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
        Paginator::useBootstrap();
        view()->composer('*', function ($view){

            $providerContactInfo = Contact::first();
            $providerCategories = Category::orderBy('id', 'asc')->get();
            $providerNews = Blogs::orderBy('news_id', 'desc')->take(2)->get();
            return $view->with(compact('providerContactInfo', 'providerCategories', 'providerNews'));

        });
    }

}
