<?php

namespace Snake\Core\Http;

class Response {
  /**
   * Response the data as json
   *
   * @param mixed $data
   * @param array $header
   * @param int $status
   *
   * @return void
   */
  public static function json(mixed $data, array $header = [], int $status = 200): void {
    http_response_code($status);
    header('Content-Type: application/json');

    if (count($header) > 0) {
      foreach ($header as $key => $value) {
        if ($key === 'Content-Type' && $value === 'application/json') {
          continue;
        }
  
        header($key . ': ' . $value);
      }
    }

    echo json_encode($data);
  }
}