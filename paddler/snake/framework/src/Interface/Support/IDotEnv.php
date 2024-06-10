<?php

namespace Snake\Interface\Support;

interface IDotEnv {
  /**
   * Load environment file and set values to $_ENV and $_SERVER superglobals
   *
   * @param string $file
   * 
   * @return void
   */
  public function load(string $file): void;

  /**
   * Get an environment variable
   *
   * @param string $key
   * @param mixed $default
   *
   * @return mixed
   */
  public static function get(string $key, mixed $default = null);

  /**
   * Set an environment variable
   *
   * @param string $key
   * @param mixed $value
   *
   * @return void
   */
  public static function set(string $key, mixed $value): void;

  /**
   * Check if an environment variable exists
   *
   * @param string $key
   *
   * @return bool
   */
  public static function has(string $key): bool;

  /**
   * Clear an environment variable
   *
   * @param string $key
   *
   * @return void
   */
  public static function clear(string $key): void;

  /**
   * Get all environment variables
   *
   * @return array
   */
  public static function all(): array;
}