<?php

namespace Snake\Interface\Routing;

use Snake\Core\Routing\Router;

interface IRouter {
  /**
   * Insert route with any method to routes
   * 
   * @param string $path
   * @param array|string|null $action
   * @param array|string|null $middleware
   * 
   * @return Router
   */
  public function any(string $path, array|string|null $action = null, array|string|null $middleware = null): Router;

  /**
   * Insert route with get method to routes
   *
   * @param string $path
   * @param array|string|null $action
   * @param array|string|null $middleware
   *
   * @return Router
   */
  public function get(string $path, array|string|null $action = null, array|string|null $middleware = null): Router;

  /**
   * Insert route with post method to routes
   *
   * @param string $path
   * @param array|string|null $action
   * @param array|string|null $middleware
   *
   * @return Router
   */
  public function post(string $path, array|string|null $action = null, array|string|null $middleware = null): Router;

  /**
   * Insert route with put method to routes
   *
   * @param string $path
   * @param array|string|null $action
   * @param array|string|null $middleware
   *
   * @return Router
   */
  public function put(string $path, array|string|null $action = null, array|string|null $middleware = null): Router;

  /**
   * Insert route with patch method to routes
   *
   * @param string $path
   * @param array|string|null $action
   * @param array|string|null $middleware
   *
   * @return Router
   */
  public function patch(string $path, array|string|null $action = null, array|string|null $middleware = null): Router;

  /**
   * Insert route with delete method to routes
   *
   * @param string $path
   * @param array|string|null $action
   * @param array|string|null $middleware
   *
   * @return Router
   */
  public function delete(string $path, array|string|null $action = null, array|string|null $middleware = null): Router;

  /**
   * Insert route with options method to routes
   *
   * @param string $path
   * @param array|string|null $action
   * @param array|string|null $middleware
   *
   * @return Router
   */
  public function options(string $path, array|string|null $action = null, array|string|null $middleware = null): Router;

  /**
   * Add prefix to routes
   *
   * @param string $prefix
   *
   * @return Router
   */
  public function prefix(string $prefix): Router;

  /**
   * Add middleware to routes
   *
   * @param array|string $middleware
   *
   * @return Router
   */
  public function middleware(array|string $middleware): Router;

  /**
   * Add controller to routes
   *
   * @param string $name
   *
   * @return Router
   */
  public function controller(string $name): Router;

  /**
   * Add namespace to routes
   *
   * @param callable $callback
   *
   * @return Router
   */
  public function namespace(string $namespace): Router;

  /**
   * Add alias to routes
   * 
   * @param string $alias
   * 
   * @return Router
   */
  public function alias(string $alias): Router;

  /**
   * Add name to routes
   *
   * @param string $name
   *
   * @return Router
   */
  public function name(string $name): Router;

  /**
   * Check if a route exists
   *
   * @param string $name
   *
   * @return bool
   */
  public function hasRoute(string $name): bool;

  /**
   * Get a route
   *
   * @param string $name
   *
   * @return string|null
   */
  public function getRoute(string $name): string|null;

  /**
   * Check if the current route is the given route
   *
   * @param string $name
   *
   * @return bool
   */
  public function isRoute(string $name): bool;
}