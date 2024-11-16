<?php


function dump($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function dd($data)
{
    dump($data);
    die();
}

function print_arr($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}


function abort($code = 404)
{
    http_response_code($code);
    require VIEWS . "/errors/{$code}.tpl.php";
}

function isUrl($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function db(): \Core\Db
{
    return \Core\App::get(\Core\Db::class);
}

function createSlug($title)
{
    $slug = mb_strtolower($title, 'UTF-8');
    $slug = preg_replace('/\s+/', '-', $slug);
    $slug = preg_replace('/[^\w-]/u', '', $slug);
    $slug = preg_replace('/-+/', '-', $slug);
    $slug = trim($slug, '-');
    return $slug;
}

function route_param(string $key, $default = null)
{
    return \Core\Router::$route_params[$key] ?? $default;
}
