<?php

use Snake\Core\View\Sea;

if (!function_exists('dd')) {
  /**
   * Dump the passed variables and end the script
   *
   * @param mixed $args
   *
   * @return void
   */
  function dd($args) {
    Sea::view('debug.dd', ['param' => func_get_args()]);
  }
}

if (!function_exists('ddd')) {
  /**
   * Dump the passed variables
   *
   * @param mixed $args
   *
   * @return void
   */
  function ddd($args) {
    Sea::view('debug.dd', ['param' => func_get_args()]);
    die();
  }
}