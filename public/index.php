<?php

define('BASEPATH', __DIR__ . '/..');
define('PUBLIC_PATH', __DIR__);

require_once BASEPATH . '/paddler/autoload.php';

exit(Snake\Core\Facade\Kernel::web()->run());
