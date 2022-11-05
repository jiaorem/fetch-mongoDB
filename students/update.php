<?php

include ("../init.php");

$collection = $client->local->students;
//var_dump($update_student)
try {
        if (isset($_POST['_id'])) {

        $studentId = $_POST['studentId'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $birthdate = $_POST['birthdate'];
        $address = $_POST['address'];
        $program = $_POST['program'];
        $contactNumber = $_POST['contactNumber'];
        $emergencyContact = $_POST['emergencyContact'];

    $all_students = $collection->updateOne(['_id'=> $_POST['_id']],
    ['$set'=>
    [
        'studentId' => $studentId,
        'firstName' => $firstName,
        'lastName' => $lastName,
        'birthdate' => $birthdate,
        'address' => $address,
        'program' => $program,
        'contactNumber' => $contactNumber,
        'emergencyContact' => $emergencyContact,
    ]]);

    echo "<script>window.location.href='index.php';</script>";
    exit;

        }
    }
    catch (Exception $e) {
        error_log($e->getMessage());
    }

