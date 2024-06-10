<?php

namespace Bin\Providers;

use Snake\Core\Routing\Route;
use Snake\Core\Routing\Router;
use Snake\Core\Facade\Provider;

class RouteServiceProvider extends Provider {
  /**
   * Register the service provider
   *
   * @return void
   */
  public function register(): void {
    //
  }

  /**
   * Booting the service provider
   *
   * @return void
   */
  public function booting(): void {
    $this->app->singleton(Router::class);
    $this->routing();
  }

  /**
   * Routing
   *
   * @return void
   */
  private function routing(): void {
    Route::namespace('Bin\\Controllers\\Web')
      ->group(function () {
        require_once basepath() . '/route/web.php';
      });

    Route::namespace('Bin\\Controllers\\Api')
      ->name('api.')
      ->prefix('/api')
      ->group(function () {
        require_once basepath() . '/route/api.php';
      });
  }
}
