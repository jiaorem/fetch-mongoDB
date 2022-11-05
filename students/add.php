<?php

include ("../init.php");

//
$template = $mustache->loadTemplate('add.mustache');
echo $template->render();

try {
	if (isset($_POST['firstName'])) {

        $studentId = $_POST['studentId'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $birthdate = $_POST['birthdate'];
        $address = $_POST['address'];
        $program = $_POST['program'];
        $contactNumber = $_POST['contactNumber'];
        $emergencyContact = $_POST['emergencyContact'];

        $collection = $client->local->students;
        $insertOneResult = $collection->insertOne([
            'studentId' => $studentId,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthdate' => $birthdate,
            'address' => $address,
            'program' => $program,
            'contactNumber' => $contactNumber,
            'emergencyContact' => $emergencyContact,
        ]);

		echo "<script>window.location.href='index.php';</script>";
		exit;
	}
}

catch (Exception $e) {
	error_log($e->getMessage());
}