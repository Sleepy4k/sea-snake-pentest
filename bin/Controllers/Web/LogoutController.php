<?php

namespace Bin\Controllers\Web;

use Bin\Controllers\Controller;

class LogoutController extends Controller {
  /**
   * Handle the request
   *
   * @return void
   */
  public function __invoke() {
    session()->regenerate();
    redirect('/');
  }
}
