<?php

namespace rest\models;

use rest\App;

class BaseModel
{
    public $db;
    public $table;
    public $partition;

    public function __construct()
    {
        $cfg = App::instance()->config['db'];
        try {
            $this->db = new \PDO($cfg['dsn'], $cfg['username'], $cfg['password'], $cfg['options']);
        } catch (\PDOException $e) {
            print "Error: " . $e->getMessage() . "<br/>";
            die();
        }
        $this->partition = App::instance()->config['partition'];
    }
} 