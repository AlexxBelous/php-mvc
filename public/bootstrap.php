<?php
use Core\ServiceContainer;
use Core\Db;
use Core\App;

$container = new ServiceContainer();


$container->setService('Core\Db', function () {
    $db_config = require_once CONFIG . '/db.php';
    return Db::getInstance()->getConnection($db_config);
});

App::setContainer($container);