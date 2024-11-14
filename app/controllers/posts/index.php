<?php
use Core\Db;
use Core\App;




$db = App::get(Db::class);





$posts = $db->query("select * from posts order by id desc")->findAll();

$resent_posts = $db->query("select * from posts order by id desc limit 3")->findAll();



require_once VIEWS . '/posts/index.tpl.php';