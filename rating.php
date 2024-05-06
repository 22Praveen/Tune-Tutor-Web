<?php
session_start();
require 'vendor/autoload.php'; // Include Composer's autoloader

$mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
$collection = $mongoClient->tunetutor->coursedetails;

$message = "Thank you for your review";

$course_id = $_SESSION['courseid'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['uid'];
    $review_text = $_POST['feedback'];
    $ratings = $_POST['rate'];

    $review = [
        'user_id' => $user_id,
        'review_text' => $review_text,
        'ratings' => $ratings
    ];

    try {
        // Find the document with the specified course_id
        $result = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($course_id)]);

        if ($result) {
            // Check if the review object already exists
            if (isset($result->review)) {
                // If review object exists, push the new review into the existing array
                $collection->updateOne(
                    ['_id' => new MongoDB\BSON\ObjectID($course_id)],
                    ['$push' => ['review' => $review]]
                );
            } else {
                // If review object doesn't exist, create a new one with the new review
                $collection->updateOne(
                    ['_id' => new MongoDB\BSON\ObjectID($course_id)],
                    ['$set' => ['review' => [$review]]]
                );
            }
         
            echo "<script type='text/javascript'>alert('$message');window.location.href='course-details.php?id=$course_id';</script>";
        } else {
            echo "Course with ID $course_id not found.";
        }
    } catch (MongoDB\Driver\Exception\Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>
