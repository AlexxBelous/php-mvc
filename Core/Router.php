<?php

namespace Core;


class Router
{
    protected $routes = [];
    protected $uri;
    protected $method;
    public static array $route_params = [];

    public function __construct()
    {
        $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
        $this->method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
    }

    public function only($middleware)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $middleware;
        return $this;
    }

    public function add($uri, $controller, $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];
        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller)
    {
        return $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller)
    {
        return $this->add($uri, $controller, 'DELETE');
    }

    public function put($uri, $controller)
    {
        return $this->add($uri, $controller, 'PUT');
    }

    public function patch($uri, $controller)
    {
        return $this->add($uri, $controller, 'PATCH');
    }

    public function matches()
    {
        $matches = false;
        foreach ($this->routes as $route) {
            if ((preg_match("#^{$route['uri']}$#", $this->uri, $match)) && ($route['method'] === strtoupper($this->method))) {
                foreach ($match as $k => $v) {
                    if (is_string($k)) {
                        static::$route_params[$k] = $v;
                    }
                }

                if ($route['middleware']) {
                    $middleware = MIDDLEWARE[$route['middleware']] ?? false;
                    if (!$middleware) {
                        throw new \Exception("Incorrect middleware {$route['middleware']}");
                    }
                    (new $middleware)->handle();
                }

                require CONTROLLERS . "/{$route['controller']}";
                $matches = true;
                break;

            }

        }
        if (!$matches) {
            abort();
        }
    }
}