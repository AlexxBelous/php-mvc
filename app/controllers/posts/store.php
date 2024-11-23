<?php

use Core\Validator;
use Core\App;
use Core\Db;

$db = App::get(Db::class);

$fillable = ['title', 'slug', 'excerpt', 'content'];
$data = load($fillable);

$validator = new Validator();
$validation = $validator->validate($data, [
    'title' => ['required' => true, 'min' => 5, 'max' => 190],
    'excerpt' => ['required' => true, 'min' => 10, 'max' => 190],
    'content' => ['required' => true, 'min' => 100,]
]);

if($validation->hasErrors()) {
    print_arr($validation->getErrors());
} else {
    echo "Success.";
}

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






