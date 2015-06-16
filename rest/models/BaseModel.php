<?php

namespace rest\models;

use rest\App;

class BaseModel
{
    public $db;
    public $table;

    public function __construct()
    {
        $cfg = App::instance()->config['db'];
        $db = new \PDO($cfg['dsn'], $cfg['username'], $cfg['password'], $cfg['options']);
    }

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