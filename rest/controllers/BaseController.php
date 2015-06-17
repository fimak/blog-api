<?php

namespace rest\controllers;

/**
 * Class BaseController
 * @package rest\controllers
 *
 * @property \rest\Request $request
 */
class BaseController
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function action()
    {
        switch ($this->request->method) {
            case 'GET':
                $action = 'index';
                break;
            case 'POST':
                $action = 'create';
                break;
            case 'PUT':
                $action = 'update';
                break;
            case 'DELETE':
                $action = 'delete';
                break;
            default:
                $action = 'index';
        }
        echo json_encode($this->$action());
    }
} 