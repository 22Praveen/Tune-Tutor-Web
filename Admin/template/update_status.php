<?php
// Include the MongoDB PHP library
require '../../vendor/autoload.php';

// MongoDB connection
$mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
$collection = $mongoClient->tunetutor->Counseling; // Assuming your collection name is 'counseling'

// Get the status and counseling ID from the AJAX request
$status = $_POST['status'];
$counselingId = $_POST['counselingId'];

// Update the status in the database
$updateResult = $collection->updateOne(
    ['_id' => new MongoDB\BSON\ObjectId($counselingId)], // Filter by counseling ID
    ['$set' => ['status' => (int) $status]] // Set the new status
);

// Check if the update was successful
if ($updateResult->getModifiedCount() > 0) {
    echo 'success';
  
} else {
    echo 'Failed to update status.';
}
?>
