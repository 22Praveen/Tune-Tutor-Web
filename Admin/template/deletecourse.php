<?php
// Include the MongoDB PHP library
require '../../vendor/autoload.php';

// Connect to MongoDB
$mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');

// Select the database and collection
$collection = $mongoClient->tunetutor->coursedetails;

// Check if the course ID is provided in the URL
if (isset($_GET['id'])) {
    // Get the course ID from the URL
    $courseId = $_GET['id'];

    // Create a filter to find the course by its ID
    $filter = ['_id' => new MongoDB\BSON\ObjectID($courseId)];

    try {
        // Delete the course from the collection
        $result = $collection->deleteOne($filter);

        // Check if the deletion was successful
        if ($result->getDeletedCount() > 0) {
            header("Location: allcourses.php");
            exit();
        } else {
           
            echo "<script type='text/javascript'>alert('No course found with the given ID.');window.location.href='allcourses.php';</script>";

        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
   
    echo "<script type='text/javascript'>alert('Course ID not provided.');window.location.href='allcourses.php';</script>";

}
?>
