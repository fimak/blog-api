<?php

namespace rest\controllers;

use rest\models\News;


class NewsController extends BaseController
{
    public function index()
    {
        $model = new News;
        return $model->table;
    }
} 