<?php

namespace Snake\Core\Http;

use Exception;

class Request {
  /**
   * The request data
   *
   * @var array $requestData
   */
  private $requestData;

  /**
   * The server data
   *
   * @var array $serverData
   */
  private $serverData;

  /**
   * The validator
   *
   * @var Validator $validator
   */
  private $validator;

  /**
   * Constructor
   *
   * @return void
   */
  public function __construct() {
    @$_REQUEST = [...@$_REQUEST ?? [], ...@json_decode(strval(file_get_contents('php://input')), true, 1024) ?? []];
    $this->requestData = [...@$_REQUEST, ...@$_FILES ?? []];
    $this->serverData = @$_SERVER ?? [];
  }

  /**
   * Fails
   *
   * @return void
   */
  private function fails(): void {
    if ($this->validator->fails()) {
      session()->set('old', $this->all());
      session()->set('error', $this->validator->failed());
      redirect('/');
    }
  }

  /**
   * Get request data
   *
   * @param string|null $name
   * @param mixed $defaultValue
   *
   * @return mixed
   */
  public function get(string|null $name = null, mixed $defaultValue = null): mixed {
    if ($name === null) {
      return $this->requestData;
    }

    return $this->requestData[$name] ?? $defaultValue;
  }

  /**
   * Get server data
   *
   * @param string|null $name
   * @param mixed $defaultValue
   *
   * @return mixed
   */
  public function server(string|null $name = null, mixed $defaultValue = null): mixed {
    if ($name === null) {
      return $this->serverData;
    }

    return $this->serverData[$name] ?? $defaultValue;
  }

  /**
   * Get request method
   *
   * @return string
   */
  public function method(): string {
    return strtoupper($this->server('REQUEST_METHOD'));
  }

  /**
   * Error throw
   *
   * @param mixed $error
   *
   * @return void
   */
  public function throw(mixed $error): void {
    if ($error instanceof Validator) {
      if ($this->validator instanceof Validator) {
        throw new Exception('Terdapat 2 object validator !');
      }

      $this->validator = $error;
    } else {
      $this->validator->throw($error);
    }

    $this->fails();
  }

  /**
   * Validate request
   *
   * @param array $params
   *
   * @return array
   */
  public function validate(array $params = []): array {
    $key = array_keys($params);

    $this->validator = Validator::make($this->only($key), $params);
    $this->fails();

    foreach ($key as $k) {
      $this->__set($k, $this->validator->get($k));
    }

    return $this->only($key);
  }

  /**
   * Get all request data
   *
   * @return array
   */
  public function all(): array {
    return $this->get();
  }

  /**
   * Get only request data
   *
   * @param array $only
   *
   * @return array
   */
  public function only(array $only): array {
    $temp = [];

    foreach ($only as $ol) {
      $temp[$ol] = $this->__get($ol);
    }

    return $temp;
  }

  /**
   * Get except request data
   *
   * @param array $except
   *
   * @return array
   */
  public function except(array $except): array {
    $temp = [];
    
    foreach ($this->all() as $key => $value) {
      if (!in_array($key, $except)) {
        $temp[$key] = $value;
      }
    }

    return $temp;
  }

  /**
   * Get old request data
   *
   * @param string|null $name
   *
   * @return mixed
   */
  public function __get(string $name): mixed {
    return $this->__isset($name) ? $this->requestData[$name] : null;
  }

  /**
   * Set request data
   *
   * @param string $name
   * @param mixed $value
   *
   * @return void
   */
  public function __set(string $name, mixed $value): void {
    $this->requestData[$name] = $value;
  }

  /**
   * Check if request data is set
   *
   * @param string $name
   *
   * @return bool
   */
  public function __isset(string $name): bool {
    return isset($this->requestData[$name]);
  }
}
