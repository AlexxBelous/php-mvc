<?php

use Core\Db;
use Core\App;
use Core\Pagination;


$db = App::get(Db::class);


$page = $_GET['page'] ?? 1;
$per_page = 5;
$total = $db->query('select count(*) from posts')->getColumn();
$pagination = new Pagination((int)$page, $per_page, $total);
print_arr($pagination);

$start = $pagination->getStart();
print_arr($start);



die();
$posts = $db->query("select * from posts order by id desc")->findAll();

$resent_posts = $db->query("select * from posts order by id desc limit 3")->findAll();


require_once VIEWS . '/posts/index.tpl.php';