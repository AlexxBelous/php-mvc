<?php

//pages
$router->get('', 'index.php');
$router->get('about', 'about.php');
$router->get('blog', 'posts/index.php');

$router->get('posts/create', 'posts/create.php');

$router->post('posts', 'posts/store.php');

$router->delete('posts', 'posts/destroy.php');

