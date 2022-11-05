<?php

include "vendor/autoload.php";

$client = new MongoDB\Client();

$db = $client->local;

$mustache = new Mustache_Engine([
	'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates')
]);
