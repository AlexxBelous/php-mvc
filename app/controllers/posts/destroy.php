<?php
use Core\Db;
use Core\App;


$db = App::get(Db::class);

$db->query('delete from posts where id = :id', [
    'id' => $_POST['id']
]);

header('Location: /blog');
die();