<?php

use Core\App;
use Core\Db;

$db = App::get('Core\Db');



$slug = createSlug($_POST['title']);

$db->query("INSERT INTO posts(title, slug, excerpt, content) VALUES (:title, :slug, :excerpt, :content)", [
    'title' => $_POST['title'],
    'slug' => $slug,
    'excerpt' => $_POST['excerpt'],
    'content' => $_POST['content']
]);

header("Location: /blog");
exit;
