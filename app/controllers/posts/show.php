<?php

use Core\Db;
use Core\App;


$db = App::get(Db::class);

$slug = route_param('slug');




$post = $db->query("select * from posts where slug = :slug", [
    'slug' => $slug
])->findOrFail();




require_once VIEWS . '/posts/show.tpl.php';