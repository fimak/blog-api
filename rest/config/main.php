<?php

return [
    'db' => [
        'dsn' => 'mysql:host=localhost;dbname=blog',
        'username' => 'root',
        'password' => 'toor',
        'options' => [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ],
    ],
];