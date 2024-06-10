<?php

if (!function_exists('formatFileBytes')) {
  /**
   * Format file bytes
   *
   * @param int $bytes
   * @param int $precision
   *
   * @return string
   */
  function formatFileBytes(int $bytes = 0, int $precision = 2): string {
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    return round($bytes, $precision) . ' ' . $units[$pow];
  }

  /**
   * Get path to the asset.
   * 
   * @param string $path
   * 
   * @return string
   */
  function asset(string $path): string {
    return baseurl() . $path;
  }
}