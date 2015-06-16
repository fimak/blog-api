<?php

namespace rest\controllers;


class BaseController
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function action()
    {
        $action = $this->request->route;
        return json_encode($this->$action());
    }
} 