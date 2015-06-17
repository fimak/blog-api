<?php

namespace rest\controllers;

use rest\models\News;


class NewsController extends BaseController
{
    public function index()
    {
        $model = new News;
        return $model->find($this->request->params);
    }

    public function create()
    {
        return "The Create method temporarily unavailable";
    }

    public function update()
    {
        return "The Update method temporarily unavailable";
    }

    public function delete()
    {
        return "The Delete method temporarily unavailable";
    }
} 