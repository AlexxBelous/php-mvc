<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>basic-php</title>
    <base href="<?php echo PATH ?>/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/main.css">
    <link rel="icon" href="assets/img/favicon.ico">
</head>
<body>

<div class="wrapper">
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo isUrl('/') ? 'active' : '' ?>" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isUrl('/about') ? 'active' : '' ?>" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isUrl('/blog') ? 'active' : '' ?>" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isUrl('/posts/create') ? 'active' : '' ?>"
                               href="/posts/create">Create Post</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex text-white align-items-center list-unstyled">
                        <?php if (check_auth()): ?>
                            <li class="nav-item"><?php echo $_SESSION['user']['name']; ?></li>
                            <li class="nav-item"><a class="nav-link <?php echo isUrl('/logout') ? 'active' : '' ?>"
                                                    href="/logout">Logout</a></li>
                        <?php else: ?>
                            <li class="nav-item"><a class="nav-link <?php echo isUrl('/register') ? 'active' : '' ?>"
                                                    href="/register">Register</a></li>
                            <li class="nav-item"><a class="nav-link <?php echo isUrl('/login') ? 'active' : '' ?>"
                                                    href="/login">Login</a></li>
                        <?php endif; ?>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
<?php get_alert(); ?>