<?php 

include 'sidebar.php'; 

include '../../vendor/autoload.php';
// MongoDB connection
$mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
$courses = $mongoClient->tunetutor->Counseling->find();

?>
       
        <div class="main-panel">
          <div class="content-wrapper" style="background-color:white;">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Counsel List</h4>
                    <!-- <p class="card-description"> Add class <code>.table-striped</code> -->
                    </p>
                    <div class="table-responsive">
                    <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Status</th>
                                    <th>Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($courses as $course): ?>
                                <tr>
                                    <td class="py-1"><?php echo $course['name']; ?></td>
                                    <td><?php echo $course['email']; ?></td>
                                    <td><?php echo $course['number']; ?></td>
                                    <td>
                                        <?php if ($course['status'] == 0): ?>
                                        <label class="badge badge-danger">Pending</label>
                                        <?php elseif ($course['status'] == 1): ?>
                                        <label class="badge badge-warning">In progress</label>
                                        <?php else: ?>
                                        <label class="badge badge-success">Completed</label>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <select class="form-control update-status" data-counseling-id="<?php echo $course['_id']; ?>">
                                            <option>Select</option>
                                            <option value="0">Pending</option>
                                            <option value="1">In progress</option>
                                            <option value="2">Completed</option>
                                        </select>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
$(document).ready(function() {
    $('.update-status').change(function() {
        var status = $(this).val(); // Get the selected status value
        var counselingId = $(this).data('counseling-id'); // Get the counseling ID from the data attribute
        
        // Send an AJAX request to update the status
        $.ajax({
            type: 'POST',
            url: 'update_status.php', // Replace 'update_status.php' with the actual PHP script name
            data: { status: status, counselingId: counselingId },
            success: function(response) {
                // Handle the response from the server
                console.log(response); // Log the response for debugging
                
                // If the status is success, redirect to course_counsel.php
                if (response.trim() === 'success') {
                    window.location.href = 'course_counsel.php'; // Redirect to course_counsel.php
                }
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error(error); // Log the error for debugging
            }
        });
    });
});
</script>



<?php include 'footer.php'?>