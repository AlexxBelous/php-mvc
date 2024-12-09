<?php

use Core\App;
use Core\Db;
use Core\Validator;

$db = App::get(Db::class);

$fillable = ['title', 'slug', 'excerpt', 'content'];
$data = load($fillable);

$validator = new Validator();
$validator->validate($data, [
    'title' => ['required' => true, 'min' => 5, 'max' => 100],
    'excerpt' => ['required' => true, 'min' => 10, 'max' => 200],
    'content' => ['required' => true, 'min' => 10,]
]);


die();

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






