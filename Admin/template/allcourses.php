

<?php 

include 'sidebar.php'; 

include '../../vendor/autoload.php';
// MongoDB connection
$mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
$courses = $mongoClient->tunetutor->coursedetails->find();

?>
<div class="main-panel">
    <div class="content-wrapper" style="background-color:white;">
        
        <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Courses List</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Course Title</th>
                                        <th>Instrument</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($courses as $course): ?>
                                    <tr>
                                        <td><?php echo $course['_id']; ?></td>
                                        <td><?php echo $course['c_title']; ?></td>
                                        <td><?php echo $course['instrument']; ?></td>
                                        <td>
                                            <a href="managecourse.php?id=<?php echo $course['_id']; ?>">Update</a>
                                        </td>
                                        <td>
                                        <a href="deletecourse.php?id=<?php echo $course['_id']; ?>">Delete</a>
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

<?php include 'footer.php'; ?>