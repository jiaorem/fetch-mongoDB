<?php

include ("../init.php");
use Models\Student;

try {
$_id = $_GET['_id'];

$Id = new MongoDB\BSON\ObjectId("$_id");

$student= new Student('', '', '', '', '', '','', '', '');
$student->setConnection($connection);
$student->deleteStudent($Id);

echo "<script>window.location.href='index.php';</script>";
exit;
}
catch (Exception $e) {
    error_log($e->getMessage());
}
