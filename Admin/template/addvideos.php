<?php include 'sidebar.php'; ?>

<style>
    .select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 10px
}
</style>

<div class="container-fluid page-body-wrapper" style="background-color:white;">
        
        
        <div class="main-panel" >
          <div class="content-wrapper" style="background-color:white;">
            
            <div class="row">
              <div class="col-12 grid-margin">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Course Videos</h4>
                    <div class="form-group">
                      <label>Select the Course Here</label>

                      <?php
                      include '../../vendor/autoload.php';

                      // MongoDB connection
                      $mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
                      $collection = $mongoClient->tunetutor->coursedetails;

                      // Find all documents and retrieve only the _id and c_title fields
                      $cursor = $collection->find([], ['projection' => ['_id' => 1, 'c_title' => 1 ]]);

                      // Check if a course is selected and store it in session
                      if(isset($_POST['course_selection'])) {
                          $_SESSION['selected_course_id'] = $_POST['course_selection'];
                          
                      }

                      ?>

                    <form method="post">
                        <select name="course_selection" class="js-example-basic-single" style="width: 100%;" onchange="this.form.submit()">
                        <option value="Select">Select</option>
                            <?php foreach ($cursor as $document): ?>
                                <option value="<?= $document['_id'] ?>" style="text-align:top;"><?= $document['c_title'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </form>

                    </div>
                    
                  </div>
                </div>
              </div>


                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Courses List</h4>
                    <?php

                    include '../../vendor/autoload.php';

                    // MongoDB connection
                    $mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
                    $collection = $mongoClient->tunetutor->coursedetails;

                    // Get the course ID from the URL parameter
                    $courseId = $_SESSION['selected_course_id'] ?? null;

                    // Check if the ID is provided
                    if ($courseId) {
                        // Convert the string ID to MongoDB\BSON\ObjectID
                        $objectId = new MongoDB\BSON\ObjectID($courseId);

                        // Query to find the course by ID
                        $course = $collection->findOne(['_id' => $objectId]);
                      
                    } else {
                        echo "";
                    }

                    ?>
                    <?php
                            // Check if $course is set
                            if (isset($course)) {
                                $c_outline = $course['c_outline'];
                                $outlineArray = explode(', ', $c_outline);
                                ?>
   <form action="../db/addvideosbk.php" method="post" class="form-sample" enctype="multipart/form-data">
    <input type="hidden" name="courseid" value="<?php echo $courseId; ?>">
    <p class="card-description"></p>
    <div class="row">
        <?php
        $index = 1; // Initialize index variable
        foreach ($outlineArray as $outline) {
            echo '
            <input type="hidden" name="coursename[]" value="'.$outline.'">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">'.$outline.'</label>
                    <div class="col-sm-9">
                        <input type="file" name="course_list[]" class="form-control" />
                    </div>
                </div>
            </div>';
            $index++; // Increment index for the next iteration
        }
        ?>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
</form>



                            <?php } else {
                             
                                echo '<p style="text-align:center;">Select the Course ID!!!</p>';
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-panel ends -->
</div>
<?php include 'footer.php'?>