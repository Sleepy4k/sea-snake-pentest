<?php

use Snake\Core\View\Sea;

/**
 * Handle errors
 * 
 * @param int $errno
 * @param string $errstr
 * @param string $errfile
 * @param int $errline
 * 
 * @return bool
 */
function ErrorHandler(int $errno, string $errstr, string $errfile, int $errline): bool {
  if (!(error_reporting() & $errno)) {
    return false;
  }

  $errstr = htmlspecialchars($errstr);

  switch ($errno) {
    case E_USER_ERROR:
      Sea::view('errors.400', [
        'message' => $errstr,
        'file' => "Fatal error on line $errline in file $errfile"
      ]);
      exit(1);

    case E_USER_WARNING:
      Sea::view('errors.500', [
        'message' => $errstr,
        'file' => "Fatal error on line $errline in file $errfile"
      ]);
      break;

    case E_USER_NOTICE:
      Sea::view('errors.500', [
        'message' => $errstr,
        'file' => "Fatal error on line $errline in file $errfile"
      ]);
      break;

    default:
      Sea::view('errors.500', [
        'message' => $errstr,
        'file' => "Fatal error on line $errline in file $errfile"
      ]);
      break;
  }

  exit(1);
}

set_error_handler("ErrorHandler");