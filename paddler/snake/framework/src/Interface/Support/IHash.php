<?php

namespace Snake\Interface\Support;

interface IHash {
  /**
   * Hash a given value
   *
   * @param string $value
   * @param string $salt
   *
   * @return string
   */
  public static function make(string $value, string $salt = ''): string;

  /**
   * Generate a salt
   *
   * @param int $length
   *
   * @return string
   */
  public static function salt(int $length = 32): string;

  /**
   * Generate a unique hash
   *
   * @return string
   */
  public static function unique(): string;
}