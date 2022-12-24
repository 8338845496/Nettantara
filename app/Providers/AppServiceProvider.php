<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use App\Models\Laundry;
use App\Models\LaundryRequest;

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
        //
        Paginator::useBootstrap();
        $req = LaundryRequest::get()->where('receive',0)->count();
        $acce = LaundryRequest::get()->where('finish',0)->count();
        $dis = LaundryRequest::get()->where('dispach',0)->count();
        $proce = LaundryRequest::get()->where('process',0)->count();
        $shareData = array(
            'req' =>$req,
            'acce' =>$acce,
            'dis' =>$dis,
            'proce' =>$proce,
        );
        view()->share('shareData',$shareData);
    }
}
