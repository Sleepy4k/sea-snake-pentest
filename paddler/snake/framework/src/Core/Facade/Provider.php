<?php

namespace Snake\Core\Facade;

abstract class Provider {
  /**
   * The application instance
   *
   * @var Application $app
   */
  protected $app;

  /**
   * Constructor
   *
   * @return void
   */
  public function __construct() {
    $this->app = App::get();
  }

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
    //
  }
}