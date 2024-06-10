<?php

namespace Snake\Interface\Middleware;

use Closure;
use Snake\Core\Http\Request;

interface IMiddleware {
  /**
   * Handle the middleware
   *
   * @param Request $request
   * @param Closure $next
   *
   * @return mixed
   */
  public function handle(Request $request, Closure $next): mixed;
}