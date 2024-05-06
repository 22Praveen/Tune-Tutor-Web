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
        // Find the course in the collection
        $course = $collection->findOne($filter);

        // Check if the course exists
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Course ID not provided.";
}

// Update course details if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the course details from the form
    $courseData = [
        'instrument' => $_POST['instrument'],
        'c_title' => $_POST['c_title'],
        't_name' => $_POST['t_name'],
        'last_update' => $_POST['last_update'],
        'c_fee' => $_POST['c_fee'],
        'membership' => $_POST['membershipRadios'],
        'c_outline' => $_POST['c_outline'],
        'objective' => $_POST['objective'],
        'eligibility' => $_POST['eligibility']
    ];

    // Check if a new image is provided
    if ($_FILES['c_img']['error'] === UPLOAD_ERR_OK) {
        // Define the target directory for storing the image
        $targetDir = "../template/courseimage/";
        // Get the file name
        $fileName = basename($_FILES['c_img']['name']);
        // Move the uploaded file to the desired directory
        move_uploaded_file($_FILES['c_img']['tmp_name'], $targetDir . $fileName);
        // Update the course data with the new image path and filename
        $courseData['c_img_path'] = $targetDir;
        $courseData['c_img_filename'] = $fileName;
    }

    // Update the course details in the database
    $updateResult = $collection->updateOne(
        ['_id' => new MongoDB\BSON\ObjectID($courseId)],
        ['$set' => $courseData]
    );

    // Check if the update was successful
    if ($updateResult->getModifiedCount() > 0) {
       
        echo "<script type='text/javascript'>alert('Course details updated successfully.');window.location.href='../template/allcourses.php';</script>";

    } else {
      
        echo "<script type='text/javascript'>alert('Failed to update course details.');window.location.href='../template/allcourses.php';</script>";

    }
}
?>


