<?php
include '../vendor/autoload.php';
session_start();

// Check if course ID is provided in the session
if(isset($_SESSION['courseid'])) {
    $courseId = $_SESSION['courseid'];

    // MongoDB connection
    $mongoClient = new MongoDB\Client;
    $collection = $mongoClient->tunetutor->coursedetails;

    // Find the document with the given course ID
    $document = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($courseId)]);

    if ($document) {
        // Initialize an empty array to store video data
        $videos = [];

        // Extract the video titles and filenames from the document
        foreach ($document['videos'] as $title => $filename) {
            $videos[] = [
                'title' => $title,
                'filename' => $filename
            ];
        }

        // Output the $videos array as JSON
        echo json_encode($videos);
    } else {
        // If no document found for the given course ID, output an empty array
        echo json_encode([]);
    }
} else {
    // If course ID is not provided in the session, output an error message
    echo json_encode(['error' => 'Course ID not provided']);
}
?>
