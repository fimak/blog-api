<?php
require(__DIR__.'/rest/Request.php');
require(__DIR__.'/rest/controllers/BaseController.php');
require(__DIR__.'/rest/App.php');

$request = new \rest\Request;
$controller = new \rest\controllers\BaseController($request);

$app = \rest\App::instance()->run($controller);