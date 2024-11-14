<?php
use Core\Db;

$db_config = require_once CONFIG . '/db.php';
$db = Db::getInstance()->getConnection($db_config);

$posts = $db->query("select * from posts order by id desc")->findAll();

$resent_posts = $db->query("select * from posts order by id desc limit 3")->findAll();



require_once VIEWS . '/posts/index.tpl.php';