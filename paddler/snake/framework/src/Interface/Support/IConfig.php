<?php

namespace Snake\Interface\Support;

interface IConfig {
  /**
   * Get a config value
   *
   * @param string $file
   * @param string $variable
   *
   * @return mixed
   */
  public static function get(string $file = 'app', string $variable = 'name');
}