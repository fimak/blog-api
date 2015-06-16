<?php

namespace rest;


class App
{
    private static $instance;

    public static function instance()
    {
        if (empty(static::$instance)) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

    public function run($request)
    {
        $className = '\\rest\\controllers\\'. ucfirst($request->controller . 'Controller');
        $controller = new $className($request);
        $controller->action();
    }

}