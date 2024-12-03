<?php
use Core\Db;
use Core\App;
use Core\Pagination;


$db = App::get(Db::class);

$page = $_GET['page'] ?? 1;
$per_page = 3;
$total = $db->query("select count(*) from posts")->getColumn();
$pagination = new Pagination((int)$page, $per_page, $total);


$start = $pagination->getStart();




$posts = $db->query("select * from posts order by id desc limit $start, $per_page")->findAll();

$resent_posts = $db->query("select * from posts order by id desc limit 3")->findAll();



require_once VIEWS . '/posts/index.tpl.php';