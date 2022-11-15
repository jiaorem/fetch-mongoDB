<?php

include "vendor/autoload.php";
//include "config.php";
//$client = new MongoDB\Client();
//$db = $client->local;
$connection = (new MongoDB\Client)->local->students;  

//$connection = $collection;
$mustache = new Mustache_Engine([
	'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates')
]);
