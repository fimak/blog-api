<?php

namespace rest\models;


class BaseModel
{
    public $db;
    public $table;

    public function find()
    {
        return $this->table;
    }

    public function create()
    {
        return $this->table;
    }

    public function update()
    {
        return $this->table;
    }

    public function delete()
    {
        return $this->table;
    }
} 