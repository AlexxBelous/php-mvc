<?php

namespace Core;

class ServiceContainer
{
    protected $services = [];

    public function setService($key, $callback)
    {
        $this->services[$key] = $callback;
    }
    public function getService($key)
    {
        if(!isset($this->services[$key])) {
            throw new \Exception("Key: {$key} do not found.");
        }
        return call_user_func($this->services[$key]);
    }
}