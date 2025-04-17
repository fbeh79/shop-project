<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use TCG\Voyager\VoyagerServiceProvider;

class AppServiceProvider extends ServiceProvider
{
/**
* Register any application services.
*/
public function register(): void
{
Schema::defaultStringLength(191);
$this->app->register(VoyagerServiceProvider::class);
}

/**
* Bootstrap any application services.
*/
public function boot(): void
{

}
}
