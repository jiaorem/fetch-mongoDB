<?php 

include ("../init.php");
use Models\Student;

$_id = $_GET['_id'];
$Id = new MongoDB\BSON\ObjectId("$_id");

$student= new Student('', '', '', '', '', '','', '', '');
$student->setConnection($connection);
$edit_student = $student->getById($Id);

$_id = $edit_student->_id;
$studentId = $edit_student->studentId;
$firstName = $edit_student->firstName;
$lastName = $edit_student->lastName;
$birthdate = $edit_student->birthdate;
$address = $edit_student->address;
$program = $edit_student->program;
$contactNumber = $edit_student->contactNumber;
$emergencyContact = $edit_student->emergencyContact;

$template = $mustache->loadTemplate('edit.mustache');

echo $template->render(compact('edit_student','_id','studentId','firstName','lastName','birthdate','address','program','contactNumber','emergencyContact'));