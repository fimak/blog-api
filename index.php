<?php
require(__DIR__.'/rest/controllers/BaseController.php');
require(__DIR__.'/rest/controllers/IndexController.php');
require(__DIR__.'/rest/controllers/NewsController.php');
require(__DIR__.'/rest/models/BaseModel.php');
require(__DIR__.'/rest/models/News.php');
require(__DIR__.'/rest/Request.php');
require(__DIR__.'/rest/App.php');


$config = require(__DIR__ . '/rest/config/main.php');
$app = \rest\App::instance();

$app->run($config);