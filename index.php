<?php
require(__DIR__.'/rest/controllers/BaseController.php');
require(__DIR__.'/rest/controllers/IndexController.php');
require(__DIR__.'/rest/controllers/NewsController.php');
require(__DIR__.'/rest/models/BaseModel.php');
require(__DIR__.'/rest/models/News.php');
require(__DIR__.'/rest/Request.php');
require(__DIR__.'/rest/App.php');
require(__DIR__.'/rest/Criteria.php');

$request = new \rest\Request;

$app = \rest\App::instance()->run($request);