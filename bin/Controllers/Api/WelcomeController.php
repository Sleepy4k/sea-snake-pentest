<?php

namespace Bin\Controllers\Api;

use Bin\Controllers\Controller;

class WelcomeController extends Controller {
  /**
   * Handle the request
   *
   * @return void
   */
  public function __invoke() {
    static::response([
      'title' => config('bin', 'name'),
      'message' => 'Welcome to Snake Framework'
    ], [
      'X-Powered-By' => 'Snake Framework'
    ], 201);
  }
}
