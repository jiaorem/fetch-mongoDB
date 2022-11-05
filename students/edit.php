<?php 

include ("../init.php");

//
$collection = $client->local->students;
//$studentId = $_GET['studentId'];

$mongoId = $_GET['id'];
//var_dump($mongoId);

$update_student = $collection->findOne(['_id'=> new MongoDB\BSON\ObjectId("$mongoId")]);
//var_dump($update_student);
//var_dump($update_student->firstName);
//exit;
// $firstName = 
//var_dump($update_student->firstName);
$_id = $update_student->_id;
$studentId = $update_student->studentId;
$firstName = $update_student->firstName;
$lastName = $update_student->lastName;
$birthdate = $update_student->birthdate;
$address = $update_student->address;
$program = $update_student->program;
$contactNumber = $update_student->contactNumber;
$emergencyContact = $update_student->emergencyContact;

//var_dump($studentId);

$template = $mustache->loadTemplate('update.mustache');
echo $template->render(compact('update_student','_id','studentId','firstName','lastName','birthdate','address','program','contactNumber','emergencyContact'));
