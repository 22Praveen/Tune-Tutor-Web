<?php

include '../../vendor/autoload.php';

// MongoDB connection
$mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
$collection = $mongoClient->tunetutor->coursedetails;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data
    $instrument = $_POST['instrument'];
    $c_title = $_POST['c_title'];
    $t_name = $_POST['t_name'];
    $last_update = $_POST['last_update'];
    $c_fee = $_POST['c_fee'];
    $membership = $_POST['membershipRadios'];
   
    $c_img = $_FILES['c_img'];
    
    $c_outline = $_POST['c_outline'];
    $objective = $_POST['objective'];
    $eligibility = $_POST['eligibility'];

    // Check if file is uploaded successfully
    if ($c_img['error'] === UPLOAD_ERR_OK) {
        $targetDir = "../template/courseimage/"; // Change this path to your local storage directory
        $targetFile = $targetDir . basename($c_img['name']);

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($c_img['tmp_name'], $targetFile)) {
            // File was uploaded successfully

            // MongoDB document
            $document = [
                'instrument' => $instrument,
                'c_title' => $c_title,
                't_name' => $t_name,
                'last_update' => $last_update,
                'c_fee' => $c_fee,
                'membership' => $membership,
                'c_img_path' => $targetDir, // Store path only in MongoDB
                'c_img_filename' => basename($c_img['name']), // Store filename only in MongoDB
                'c_outline' => $c_outline,
                'objective' => $objective,
                'eligibility' => $eligibility,
            ];

            // Insert document into MongoDB collection
            $result = $collection->insertOne($document);

            if ($result->getInsertedCount() > 0) {
                echo "<script type='text/javascript'>alert('Course added successfully!');window.location.href='../template/addcourse.php';</script>";
            } else {
                echo "Failed to add course.";
            }
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "File upload error: " . $c_img['error'];
    }
}
?>
