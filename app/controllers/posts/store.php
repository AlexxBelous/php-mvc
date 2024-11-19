<?php

use Core\App;
use Core\Db;

$db = App::get(Db::class);

$fillable = ['title', 'slug', 'excerpt', 'content'];
$data = load($fillable);


$errors = [];
if (empty($data['title'])) {
    $errors['title'] = 'Title is required';
}
if (empty($data['excerpt'])) {
    $errors['excerpt'] = 'Excerpt is required';
}
if (empty($data['content'])) {
    $errors['content'] = 'Content is required';
}

$slug = createSlug($data['title']);
$data['slug'] = $slug;

if (empty($errors)) {
    if ($db->query("INSERT INTO posts(title, slug, excerpt, content) VALUES (:title, :slug, :excerpt, :content)", $data)) {
        $_SESSION['success'] = 'Ok';
    } else {
        $_SESSION['error'] = 'Db error';
    }
    redirect('/blog');
}

require VIEWS . '/posts/create.tpl.php';






