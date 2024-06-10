<?php

namespace Snake\Interface\Routing;

use Snake\Core\Routing\Router;

interface IRoute {
  /**
   * Insert route with any method to routes
   * 
   * @param string $path
   * @param array|string|null $action
   * @param array|string|null $middleware
   * 
   * @return Router
   */
  public static function any(string $path, array|string|null $action = null, array|string|null $middleware = null): Router;

  /**
   * Insert route with get method to routes
   *
   * @param string $path
   * @param array|string|null $action
   * @param array|string|null $middleware
   *
   * @return Router
   */
  public static function get(string $path, array|string|null $action = null, array|string|null $middleware = null): Router;

  /**
   * Insert route with post method to routes
   *
   * @param string $path
   * @param array|string|null $action
   * @param array|string|null $middleware
   *
   * @return Router
   */
  public static function post(string $path, array|string|null $action = null, array|string|null $middleware = null): Router;

  /**
   * Insert route with put method to routes
   *
   * @param string $path
   * @param array|string|null $action
   * @param array|string|null $middleware
   *
   * @return Router
   */
  public static function put(string $path, array|string|null $action = null, array|string|null $middleware = null): Router;

  /**
   * Insert route with patch method to routes
   *
   * @param string $path
   * @param array|string|null $action
   * @param array|string|null $middleware
   *
   * @return Router
   */
  public static function patch(string $path, array|string|null $action = null, array|string|null $middleware = null): Router;

  /**
   * Insert route with delete method to routes
   *
   * @param string $path
   * @param array|string|null $action
   * @param array|string|null $middleware
   *
   * @return Router
   */
  public static function delete(string $path, array|string|null $action = null, array|string|null $middleware = null): Router;

  /**
   * Insert route with options method to routes
   *
   * @param string $path
   * @param array|string|null $action
   * @param array|string|null $middleware
   *
   * @return Router
   */
  public static function options(string $path, array|string|null $action = null, array|string|null $middleware = null): Router;

  /**
   * Add prefix to routes
   *
   * @param string $prefix
   *
   * @return Router
   */
  public static function prefix(string $prefix): Router;

  /**
   * Add middleware to routes
   *
   * @param array|string $middleware
   *
   * @return Router
   */
  public static function middleware(array|string $middleware): Router;

  /**
   * Add controller to routes
   *
   * @param string $name
   *
   * @return Router
   */
  public static function controller(string $name): Router;

  /**
   * Add namespace to routes
   *
   * @param callable $callback
   *
   * @return Router
   */
  public static function namespace(string $namespace): Router;

  /**
   * Add alias to routes
   * 
   * @param string $alias
   * 
   * @return Router
   */
  public static function alias(string $alias): Router;

  /**
   * Add name to routes
   *
   * @param string $name
   *
   * @return Router
   */
  public static function name(string $name): Router;

  /**
   * Get a route
   *
   * @param string $name
   *
   * @return string|null
   */
  public static function getRoute(string $name): string|null;

  /**
   * Check if a route exists
   *
   * @param string $name
   *
   * @return bool
   */
  public static function hasRoute(string $name): bool;

  /**
   * Check if the current route is the given route
   *
   * @param string $name
   *
   * @return bool
   */
  public static function isRoute(string $name): bool;

  /**
   * Get router instance
   *
   * @return Router
   */
  public static function router(): Router;
}