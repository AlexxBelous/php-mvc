<?php

use Core\App;
use Core\Db;

$db = App::get('Core\Db');

function createSlug($title)
{
    $slug = mb_strtolower($title, 'UTF-8');
    $slug = preg_replace('/\s+/', '-', $slug);
    $slug = preg_replace('/[^\w-]/u', '', $slug);
    $slug = preg_replace('/-+/', '-', $slug);
    $slug = trim($slug, '-');
    return $slug;
}

$slug = createSlug($_POST['title']);

$db->query("INSERT INTO posts(title, slug, excerpt, content) VALUES (:title, :slug, :excerpt, :content)", [
    'title' => $_POST['title'],
    'slug' => $slug,
    'excerpt' => $_POST['excerpt'],
    'content' => $_POST['content']
]);

header("Location: /blog");
exit;
