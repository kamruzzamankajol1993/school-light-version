<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\InstituteInformation;
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

        $icon_name = InstituteInformation::value('icon');
        $logo_name = InstituteInformation::value('logo');
        $ins_name = InstituteInformation::value('name');

        view()->share('ins_name', $ins_name);
        view()->share('logo',  $logo_name);
        view()->share('icon', $icon_name);

    }
}
