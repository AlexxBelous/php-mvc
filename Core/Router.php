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

    public function add($uri, $controller, $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function get($uri, $controller)
    {
        $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller)
    {
        $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller)
    {
        $this->add($uri, $controller, 'DELETE');
    }

    public function put($uri, $controller)
    {
        $this->add($uri, $controller, 'PUT');
    }

    public function patch($uri, $controller)
    {
        $this->add($uri, $controller, 'PATCH');
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