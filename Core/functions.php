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
