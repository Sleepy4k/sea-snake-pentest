<?php

use Snake\Core\Routing\Route;

if (!function_exists('route')) {
  /**
   * Get path of a route
   * 
   * @param string $path
   * 
   * @return string|null
   */
  function route(string $path): string|null {
    return Route::getRoute($path);
  }
}

if (!function_exists('route_exist')) {
  /**
   * Check if a route exists
   * 
   * @param string $path
   * 
   * @return bool
   */
  function route_exist(string $path): bool {
    return Route::hasRoute($path);
  }
}

if (!function_exists('is_route')) {
  /**
   * Check if the current route is the given route
   * 
   * @param string $path
   * 
   * @return bool
   */
  function is_route(string $path): bool {
    return Route::isRoute($path);
  }
}