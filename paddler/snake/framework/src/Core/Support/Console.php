<?php

namespace Snake\Core\Support;

include_once __DIR__ . '/../Const/Menu.php';

class Console {
  /**
   * Command
   *
   * @var string
   */
  private $command;

  /**
   * Options
   *
   * @var string
   */
  private $options;

  /**
   * Constructor
   */
  public function __construct() {
    $argv = $_SERVER['argv'];
    array_shift($argv);
    $this->command = $argv[0] ?? null;
    $this->options = $argv[1] ?? null;
  }

  /**
   * Destructor
   */
  public function __destruct() {
    print(PHP_EOL);
  }

  /**
   * List menu
   *
   * @return void
   */
  private function list_menu(): void {
    foreach (MENU_LIST as $key => $value) {
      printf("%s\t%s\n", $value['command'], $value['description']);
    }
  }

  /**
   * Run command
   *
   * @return int
   */
  public function run(): int {
    switch ($this->command) {
      case 'run':
        $location = ($this->options) ? $this->options : 'localhost:8000';
        $location = explode(':', $location);
        $host = $location[0];
        $port = $location[1] ?? 8000;
        $host = (string) $host;
        $port = (int) $port;
        shell_exec("php -S {$host}:{$port} -t public");
        break;
      default:
        $this->list_menu();
        break;
    }

    return 0;
  }
}