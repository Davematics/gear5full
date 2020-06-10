<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;
use App\Ads;
use App\Category;
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
        $categories=Category::paginate(9);
        $adss212x2002=Ads::where('dimension','212 X 200')->inRandomOrder()->paginate(6);
        $adss212x200=Ads::where('dimension','212 X 200')->inRandomOrder()->paginate(6);
        $adss212x2003=Ads::where('dimension','212 X 200')->inRandomOrder()->paginate(6);
        view::share('adss212x2002',$adss212x2002);
        view::share('adss212x200',$adss212x200);
        view::share('adss212x2003',$adss212x2003);
        view::share('categories',$categories);
        View::share('url','http://localhost:8000');
    }
}
