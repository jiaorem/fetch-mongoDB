<?php

include ("../init.php");

//
$collection = $client->local->students;
$all_students = $collection->find();

$template = $mustache->loadTemplate('index.mustache');
echo $template->render((compact('all_students')));