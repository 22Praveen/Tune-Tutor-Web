<?php

require 'vendor/autoload.php'; // Include Composer's autoloader

$mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
$collection = $mongoClient->tunetutor->Counseling;

$message = "Our Business Executive Will Reach You Soon...";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $status = 0;


    $user = [
        'name' => $name,
        'number' => $number,
        'email' => $email,
        'status' => $status,
     
    ];

    try {
        $collection->insertOne($user);
        echo "<script type='text/javascript'>alert('$message');window.location.href='courses.php';</script>";
    } catch (MongoDB\Driver\Exception\Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>