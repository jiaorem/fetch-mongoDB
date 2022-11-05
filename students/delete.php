<?php

include ("../init.php");

//

$collection = $client->local->students;
$studentId = $_GET['studentId'];
$all_students = $collection->deleteOne(['studentId'=>$studentId]);

echo "<script>window.location.href='index.php';</script>";
exit;

