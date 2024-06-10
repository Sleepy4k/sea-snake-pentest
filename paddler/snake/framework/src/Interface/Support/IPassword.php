<?php

namespace Snake\Interface\Support;

interface IPassword {
  /**
   * Hash a password
   *
   * @param string $password
   *
   * @return string
   */
  public static function make(string $password): string;

  /**
   * Check a password
   *
   * @param string $password
   * @param string $hash
   *
   * @return bool
   */
  public static function verify(string $password, string $hash): bool;
}