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

function load($fillable = [])
{
    $data = [];
    foreach ($_POST as $k => $v) {
        if (in_array($k, $fillable)) {
            $data[$k] = trim($v);
        }
    }
    return $data;
}

function old($fieldname)
{
    return isset($_POST[$fieldname]) ? h($_POST[$fieldname]) : '';
}

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

function redirect($url = '')
{
    if ($url) {
        $redirect = $url;
    } else {
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: {$redirect}");
    die();
}

function get_alert()
{
    if (!empty($_SESSION['success'])) {
        require_once VIEWS . '/includes/alert_success.php';
        unset($_SESSION['success']);
    }
    if (!empty($_SESSION['error'])) {
        require_once VIEWS . '/includes/alert_error.php';
        unset($_SESSION['error']);
    }
}