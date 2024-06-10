<?php

namespace Snake\Core\Controller;

use Snake\Core\View\Sea;
use Snake\Core\Facade\App;
use BadMethodCallException;
use Snake\Core\Http\Request;
use Snake\Core\Http\Response;
use Snake\Core\Http\Validator;
use Snake\Interface\Controller\IController;

class BaseController implements IController {
  /**
   * Validate the request
   *
   * @param Request $request
   * @param array $rules
   *
   * @return Validator
   */
  public static function validate(Request $request, array $rules): Validator {
    return App::get()->singleton(Validator::class, [$request, $rules]);
  }

  /**
   * View the page
   *
   * @param string $view
   * @param array $variables
   *
   * @return void
   */
  public static function view(string $view, array $variables = []): void {
    Sea::view($view, $variables);
  }

  /**
   * Response the data
   *
   * @param mixed $data
   * @param array $header
   * @param int $status
   *
   * @return void
   */
  public static function response(mixed $data, array $header = [], int $status = 200): void {
    Response::json($data, $header, $status);
  }

  /**
   * Execute an action on the controller.
   *
   * @param string $method
   * @param array $parameters
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function callAction(string $method, array $parameters) {
    return $this->{$method}(...array_values($parameters));
  }

  /**
   * Handle calls to missing methods on the controller.
   *
   * @param string $method
   * @param array $parameters
   *
   * @return mixed
   *
   * @throws \BadMethodCallException
   */
  public function __call(string $method, array $parameters): mixed {
    if (!method_exists($this, $method)) {
      if (config('bin', 'debug') && config('bin', 'env') === 'development') {
        throw new BadMethodCallException(sprintf(
          'Method %s::%s does not exist.', static::class, $method
        ));
      } else {
        static::view('errors.500', [
          'message' => 'Method ' . static::class . '::' . $method . ' does not exist.'
        ]);
      }

      exit;
    }
  }
}