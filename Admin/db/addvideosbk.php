<?php
include '../../vendor/autoload.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if course ID is provided
    if(isset($_POST['courseid']) && isset($_FILES['course_list'])) {
        $courseId = $_POST['courseid'];
        $courseNames = $_POST['coursename'];
        $fileList = $_FILES['course_list'];

        // Initialize an empty array to store the video files with their corresponding course names
        $videos = [];

        // Handle each uploaded file
        foreach ($fileList['name'] as $index => $fileName) {
            // Check if the file is uploaded successfully
            if ($fileList['error'][$index] === UPLOAD_ERR_OK) {
                // Process the uploaded file
                $tmpFilePath = $fileList['tmp_name'][$index];

                // Access corresponding course name using $courseNames[$index]
                $courseName = $courseNames[$index];

                // Generate a unique filename to avoid conflicts
                $uniqueFileName = uniqid() . '_' . $fileName;

                // Set the target directory to save the file
                $targetDir = "../template/coursevideo/";

                // Move the uploaded file to the target directory
                $targetFilePath = $targetDir . $uniqueFileName;
                move_uploaded_file($tmpFilePath, $targetFilePath);

                // Assign the unique file name to the course name in the $videos array
                $videos[$courseName] = $uniqueFileName;
            } else {
                // Handle the case where file upload failed
                echo "File upload failed for course: $courseName<br>";
            }
        }

        // MongoDB connection
        $mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
        $collection = $mongoClient->tunetutor->coursedetails;

        // Update the MongoDB collection with the videos array
        $result = $collection->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($courseId)],
            ['$set' => ['videos' => $videos]]
        );

        if ($result->getModifiedCount() == 1) {
            echo "<script type='text/javascript'>alert('Videos uploaded successfully!');window.location.href='../template/addvideos.php';</script>";
        } else {
            echo "<script type='text/javascript'>alert('Failed to update course with videos!');window.location.href='../template/addvideos.php';</script>";

           
        }
    }
}
?>
