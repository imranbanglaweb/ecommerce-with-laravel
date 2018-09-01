<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
          // View::composer('Frontend.header_menu',function($view){

          //   $categories = DB::table('tbl_category')
          //               ->get();

          // $categories = DB::table('tbl_product')
          //   ->join('tbl_category','tbl_product.category_id', '=', 'tbl_category.id')
          //   ->select('tbl_product.*', 'tbl_category.*')
          //   ->get();

            // $view->with('categories',$categories);


    // }); 
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
