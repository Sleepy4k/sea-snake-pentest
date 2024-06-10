<?php

use Snake\Core\Facade\App;
use Bin\Kernel as BinKernel;

if (!function_exists('baseurl')) {
  /**
   * Get the base url
   *
   * @return string
   */
  function baseurl(): string {
    if (isset($_SERVER['HTTPS'])) {
      $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    } else {
      $protocol = 'http';
    }
  
    return $protocol . "://" . $_SERVER['HTTP_HOST'] . "/";
  }
}

if (!function_exists('basepath')) {
  /**
   * Get the base path
   *
   * @return string
   */
  function basepath(): string {
    return App::get()->singleton(BinKernel::class)->getPath();
  }
}