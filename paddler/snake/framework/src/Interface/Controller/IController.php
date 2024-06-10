<?php

namespace Snake\Interface\Controller;

use Snake\Core\Http\Request;
use Snake\Core\Http\Validator;

interface IController {
  /**
   * Validate the request
   *
   * @param Request $request
   * @param array $rules
   *
   * @return Validator
   */
  public static function validate(Request $request, array $rules): Validator;

  /**
   * View the page
   *
   * @param string $view
   * @param array $variables
   *
   * @return void
   */
  public static function view(string $view, array $variables = []): void;

  /**
   * Response the data
   *
   * @param mixed $data
   * @param array $header
   * @param int $status
   *
   * @return void
   */
  public static function response(mixed $data, array $header = [], int $status = 200): void;

  /**
   * Execute an action on the controller.
   *
   * @param string $method
   * @param array $parameters
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function callAction(string $method, array $parameters);

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
  public function __call(string $method, array $parameters): mixed;
}