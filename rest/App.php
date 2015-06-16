<?php

namespace rest;


class App
{
    private static $instance;
    protected $request;
    protected $controller;

    public static function instance($request, $controller)
    {
        if (empty(static::$instance)) {
            static::$instance = new static();
            static::$instance->request = $request;
            static::$instance->controller = $controller;
        }

        return static::$instance;
    }

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

    public function run()
    {
        echo static::$instance->controller->action(static::$instance->request->route);
    }

} 