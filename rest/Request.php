<?php

namespace rest;


class Request
{
    public $method;
    public $uri;
    public $controller;
    public $params;

    public function __construct($method = null, $uri = null)
    {
        if (is_null($method)) {
            $this->method = strtoupper($_SERVER['REQUEST_METHOD']);
        }
        if (is_null($uri)) {
            $this->uri = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), ' /');
        }
        $route = explode('/', ltrim($this->uri, ' /'));
        $this->controller = !empty($route[0]) ? $route[0] : 'index';
        $this->params = $_REQUEST;
        $this->params['id'] = isset($route[1]) ? $route[1] : null;
    }
} 