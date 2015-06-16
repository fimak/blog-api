<?php

namespace rest\models;


class BaseModel
{
    public $db;
    public $table;

    public static function find($criteria)
    {
        return 'news';
    }

//    public function create()
//    {
//
//    }
//
//    public function update($criteria)
//    {
//
//    }
//
//    public function delete($criteria)
//    {
//
//    }
} 