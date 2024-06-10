<?php

namespace Snake\Core\Facade;

use Snake\Core\View\Sea;
use Bin\Kernel as BinKernel;
use Snake\Core\Http\Request;
use Snake\Core\Routing\Route;

class Service {
  /**
   * The request
   *
   * @var Request $request
   */
  private $request;

  /**
   * Constructor
   *
   * @return void
   */
  public function __construct() {
    $this->request = App::get()->singleton(Request::class);
    $this->bootingProviders();
  }

  /**
   * Booting providers
   *
   * @return void
   */
  private function bootingProviders(): void {
    $services = App::get()->singleton(BinKernel::class)->services();

    foreach ($services as $service) {
      App::get()->make($service)->booting();
    }
  }

  /**
   * Invoke controller
   *
   * @param array $route
   * @param array $variables
   *
   * @return int
   */
  private function invokeController(array $route, array $variables): int {
    $routeController = $route['controller'] ?? null;
    $routeFunction = $route['function'] ?? null;
    $namespace = $route['namespace'] ?? null;
    $function = null;

    if (is_null($routeFunction)) {
      return 0;
    }

    if (is_null($routeController)) {
      $function = '__invoke';
    }

    if (!is_null($namespace)) {
      $controller = $namespace . '\\' . str_replace('/', '\\', $routeFunction);
    } else {
      $controller = $routeController;
    }

    array_shift($variables);

    $functionToInvoke = ($function == '__invoke') ? $function : $routeController;
    App::get()->invoke($controller, $functionToInvoke, $variables);

    return 0;
  }

  /**
   * Handle out of route
   *
   * @param bool $routeMatch
   *
   * @return int
   */
  private function handleOutOfRoute(bool $routeMatch): int {
    if ($routeMatch) {
      Sea::view('errors.405', [
        'message' => 'This method is not allowed for this route.'
      ]);

      return 0;
    }

    Sea::view('errors.404', [
      'message' => 'The requested URL was not found on this server.'
    ]);

    return 0;
  }

  /**
   * Get valid url
   *
   * @return string
   */
  private function getValidUrl(): string {
    $sep = explode($this->request->server('HTTP_HOST'), baseurl(), 2)[1];

    if (empty($sep)) {
      return $this->request->server('REQUEST_URI');
    }

    $raw = explode($sep, $this->request->server('REQUEST_URI'), 2)[1];

    if (!empty($raw)) {
      return $raw;
    }

    return '/';
  }

  /**
   * Run the application
   *
   * @return int
   */
  public function run(): int {
    $routeMatch = false;
    $url = $this->getValidUrl();
    $this->request->__set('REQUEST_URL', $url);

    $path = '/' . trim(parse_url($url, PHP_URL_PATH), '/');
    $method = strtoupper($this->request->method() === 'POST' ? $this->request->get('_method', 'POST') : $this->request->method());

    foreach (Route::router()->routes() as $route) {
      if (preg_match('#^' . $route['path'] . '$#', $path, $variables)) {
        if ($route['method'] === $method) {
          return $this->invokeController($route, $variables);
        }

        $routeMatch = true;
      }
    }

    return $this->handleOutOfRoute($routeMatch);
  }
}