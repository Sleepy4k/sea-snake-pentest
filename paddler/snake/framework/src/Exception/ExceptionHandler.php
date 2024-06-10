<?php

use Snake\Core\View\Sea;

/**
 * Handle exceptions
 * 
 * @param any $e
 * 
 * @return void
 */
function ExceptionHandler($e): void {
  Sea::view('errors.trace', [
    'exception' => [
      'file' => $e->getFile(),
      'line' => $e->getLine(),
      'message' => $e->getMessage(),
      'trace' => $e->getTraceAsString()
    ]
  ]);

  exit(1);
}

set_exception_handler("ExceptionHandler");