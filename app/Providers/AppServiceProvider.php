<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('strip', function ($expression) {
          return "<?php echo strip_tags(e({$expression})); ?>";
        });

        Blade::directive('truncate', function($expression){
            list($string, $length) = explode(',',str_replace(['(',')',' '], '', $expression));
            $str = strip_tags($string);
            return "<?php echo e(strlen({$str}) > {$length} ? substr({$str},0,{$length}).'...' : {$str}); ?>";
        });
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
