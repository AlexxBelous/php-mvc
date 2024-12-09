<?php

//pages
$router->get('', 'index.php');
$router->get('about', 'about.php');

$router->get('blog', 'posts/index.php');

$router->get('posts/create', 'posts/create.php')->only('auth');
$router->get('posts/(?P<slug>[a-z0-9-]+)', 'posts/show.php');

$router->post('posts', 'posts/store.php');

$router->delete('posts', 'posts/destroy.php');

$router->get('register', 'users/register.php')->only('guest');
$router->get('login', 'users/login.php')->only('guest');
$router->get('logout', 'users/logout.php');

