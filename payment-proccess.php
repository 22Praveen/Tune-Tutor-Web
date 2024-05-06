<?php
session_start();
require 'vendor/autoload.php'; // Include Composer's autoloader

$mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');

// Select the collection
$collection = $mongoClient->tunetutor->course_enrollment;

// Prepare the data to be inserted
$data = [ 
    'user_id' => $_SESSION["uid"],
    'payment_id' => $_POST['razorpay_payment_id'],
    'amount' => $_POST['totalAmount'],
    'product_id' => $_SESSION['courseid'],
    'date' => date('Y-m-d H:i:s'), // Add the current date and time
];

try {
    // Insert the data into the collection
    $insertResult = $collection->insertOne($data);

    if ($insertResult->getInsertedCount() > 0) {
        // Data inserted successfully
        echo "Data inserted successfully.";
    } else {
        echo "Failed to insert data.";
    }
} catch (MongoDB\Driver\Exception\Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
