<?php

namespace App\Providers;

use App\Repositories\Contracts\OrderRepositoryContract;
use App\Repositories\Contracts\ProductRepositoryContract;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use App\Services\Contracts\UserInfoContract;
use App\Services\UserInfoJson;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
//use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class AppServiceProvider extends ServiceProvider
{
    public array $bindings = [
        ProductRepositoryContract::class => ProductRepository::class,
        OrderRepositoryContract::class => OrderRepository::class,
    ];


//    public $bindings = [
//       UserInfoContract::class => UserInfoJson::class,
//   ];
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
        Paginator::useBootstrapFive();
    }
}
