<?php

namespace Snake\Interface\View;

interface ISea {
  /**
   * Echo the rendered view.
   *
   * @param string $view
   * @param array $data
   * @param string $ext
   *
   * @return void
   */
  public static function view(string $view, array $data = [], string $ext = 'sea.php'): void;
}