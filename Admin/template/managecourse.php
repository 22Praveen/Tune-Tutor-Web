<?php include 'sidebar.php'; ?>

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
?>

<div class="container-fluid page-body-wrapper">
        
<div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Courses</h4>
                    <form method="post" action="../db/updatecourse.php?id=<?php echo $course['_id']; ?>" class="form-sample"  enctype="multipart/form-data">
                      <p class="card-description">Course info</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Instrument Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="instrument" value="<?php echo $course['instrument']; ?>"  class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Course Title</label>
                            <div class="col-sm-9">
                              <input type="text" name="c_title" value="<?php echo $course['c_title']; ?>" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Trainer Name</label>
                            <div class="col-sm-9">
                            <select name='t_name' class="form-control">
                                <option value="Harish" <?php if ($course['t_name'] == 'Harish') echo 'selected'; ?>>Harish</option>
                                <option value="Sujith" <?php if ($course['t_name'] == 'Sujith') echo 'selected'; ?>>Sujith</option>
                                <option value="Barath" <?php if ($course['t_name'] == 'Barath') echo 'selected'; ?>>Barath</option>
                                <option value="Sunil" <?php if ($course['t_name'] == 'Sunil') echo 'selected'; ?>>Sunil</option>
                            </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Last Update</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="last_update" value="<?php echo $course['last_update']; ?>" type="date" placeholder="dd/mm/yyyy" />
                            </div>
                          </div>
                        </div>
                      </div>
                     
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Course Fee</label>
                            <div class="col-sm-9">
                              <input type="text" name="c_fee" value="<?php echo $course['c_fee']; ?>" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Membership</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="Free" <?php if ($course['membership'] == 'Free') echo 'checked'; ?> /> Free
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="Paid" <?php if ($course['membership'] == 'Paid') echo 'checked'; ?> /> Paid
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="card-description">Course Details</p>
                      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Course Image</label>
                            <div class="col-sm-9">
                            <input type="file" name="c_img" class="form-control" />
                            <?php echo $course['c_img_filename']; // Display file name ?>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Course Outline</label>
                            <div class="col-sm-9">
                              <input type="text" name="c_outline" value="<?php echo $course['c_outline']; ?>" class="form-control" />
                            </div>
                          </div>
                        </div>
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Objective</label>
                        <textarea
                          class="form-control"
                          id="exampleTextarea1"
                          rows="4" name="objective"><?php echo $course['objective']; ?></textarea>
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Eligibility</label>
                        <textarea
                          class="form-control"
                          id="exampleTextarea1"
                          rows="4" name="eligibility"><?php echo $course['eligibility']; ?></textarea>
                        
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <!-- <button class="btn btn-light">Cancel</button> -->
                    </form>
                  </div>
                </div>
              </div>
        <!-- main-panel ends -->
</div>


<?php include 'footer.php'?>