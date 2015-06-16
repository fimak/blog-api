<?php

namespace rest;


class App
{
    private static $instance;
    public $config;
    public $request;

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

    public function run($config)
    {
        static::$instance->config = $config;
        static::$instance->request = new \rest\Request;

        $className = '\\rest\\controllers\\'. ucfirst($this->request->controller . 'Controller');
        $controller = new $className($this->request);
        $controller->action();
    }

}