<?php

namespace Bin;

use Bin\Providers\BinServiceProvider;
use Bin\Providers\RouteServiceProvider;

final class Kernel {
  /**
   * The path of the project
   *
   * @var string
   */
  private $path;

  /**
   * Constructor
   *
   * @return void
   */
  function __construct() {
    $this->path = dirname(__DIR__);
  }

  /**
   * Get the path of the project
   *
   * @return string
   */
  public function getPath(): string {
    return $this->path;
  }

  /**
   * Register the service provider
   *
   * @return array
   */
  public function services(): array {
    return [
      BinServiceProvider::class,
      RouteServiceProvider::class
    ];
  }

  /**
   * Register the middleware
   *
   * @return array
   */
  public function middlewares(): array {
    return [

    ];
  }
}
