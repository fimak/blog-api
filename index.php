<?php
require(__DIR__.'/rest/Request.php');
require(__DIR__.'/rest/App.php');

$request = new \rest\Request;
$app = \rest\App::instance($request)->run();


var_dump($app);