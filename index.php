<?php

require_once 'config.php';
require_once 'library/RequestUrl.php';
require_once 'library/Request.php';
require_once 'library/Inflector.php';
require_once 'library/Response.php';
require_once 'library/View.php';
require_once 'library/Database.php';

$requestUrl = new RequestUrl($_GET['url']);
$request = new Request($requestUrl);
$request->execute();
