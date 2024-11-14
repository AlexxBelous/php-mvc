<?php
use Core\Router;

require_once dirname(__DIR__) . '/vendor/autoload.php';
require_once dirname(__DIR__) . '/config/config.php';
require_once CORE . '/functions.php';

$router = new Router();

require_once 'bootstrap.php';

require_once CONFIG . '/routes.php';

$router->matches();



