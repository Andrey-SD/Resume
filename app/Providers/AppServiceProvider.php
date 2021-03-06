<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use App\Resume;
//use Storage;
use Illuminate\Support\Facades\Storage;
use File;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $info = simplexml_load_file('data.xml');
		view()->share(['info'=>$info]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}