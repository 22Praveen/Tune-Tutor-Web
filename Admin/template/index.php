<?php 
include 'sidebar.php'; 

include '../../vendor/autoload.php';
// MongoDB connection
$mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
$courses = $mongoClient->tunetutor->course_enrollment->find();

$overalltotalAmount = 0; // Initialize total amount

?>
<?php
$mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
$totalOrdersCount = $mongoClient->tunetutor->course_enrollment->count();
?>

 <?php 
  foreach ($courses as $course):
  $overalltotalAmount +=  $course['amount']; // Accumulate total amount
   
  ?>

  <?php endforeach; ?>

  <?php
  $mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
  $totalUserCount = $mongoClient->tunetutor->userdetails->count();
  ?>

<?php
$mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');

// Select the collection
$collection = $mongoClient->tunetutor->course_enrollment;

// Get today's date in the appropriate format
$todayDate = date('Y-m-d');

// Prepare the aggregation pipeline to filter documents based on today's date and calculate total amount
// Prepare the aggregation pipeline to filter documents based on today's date and calculate total amount
$aggregatePipeline = [
  [
      '$match' => [
          'date' => ['$regex' => '^' . $todayDate] // Match documents with today's date
      ]
  ],
  [
      '$group' => [
          '_id' => null, // Group all documents
          'totalOrders' => ['$sum' => 1], // Count total orders
          'totalAmount' => ['$sum' => ['$toInt' => '$amount']] // Sum total amount after converting to int
      ]
  ]
];



try {
    // Execute the aggregation pipeline
    $aggregationResult = $collection->aggregate($aggregatePipeline)->toArray();

    // Extract total orders and total amount from the result
    $totalOrders = $aggregationResult[0]['totalOrders'];
    $totalAmount = $aggregationResult[0]['totalAmount'];

    // Output total orders and total amount
    // echo "Total orders today: $totalOrders<br>";
    // echo "Total amount today: $totalAmount<br>";
} catch (MongoDB\Driver\Exception\Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>

        <!-- main panel start -->

        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <h3 class="mb-0"> Hi, welcome back! <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Web Analytics Dashboard.</span>
              </h3>
             
            </div>
            <div class="row">
              <div class="col-xl-3 col-lg-6 stretch-card grid-margin">
                <div class="row">
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-warning">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Sales</p>
                            <h2 class="text-white"> ₹<?php echo $totalAmount; ?><span class="h5">.00</span>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                        </div>
                        <h6 class="text-white">18.33% Since last month</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-danger">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Margin</p>
                            <h2 class="text-white"> ₹10,000.<span class="h5">00</span>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
                        </div>
                        <h6 class="text-white">13.21% Since last month</h6>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
              <div class="col-xl-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-7">
                        <h5>Business Survey</h5>
                        <p class="text-muted"> Show overall enroll courses <a class="text-muted font-weight-medium pl-2" href="enrolled_list.php"><u>See Details</u></a>
                        </p>
                      </div>
                     
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="card mb-3 mb-sm-0">
                          <div class="card-body py-3 px-4">
                            <p class="m-0 survey-head">Today Orders</p>
                            <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                              <div>
                                <h3 class="m-0 survey-value"><?php echo $totalOrders; ?></h3>
                                <p class="text-success m-0">-310 avg. sales</p>
                              </div>
                              <div id="earningChart" class="flot-chart"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card mb-3 mb-sm-0">
                          <div class="card-body py-3 px-4">
                            <p class="m-0 survey-head">User's Enrolled</p>
                            <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                              <div>
                                <h3 class="m-0 survey-value"><?php echo $totalUserCount; ?></h3>
                                <p class="text-danger m-0">-310 avg. sales</p>
                              </div>
                              <div id="productChart" class="flot-chart"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card">
                          <div class="card-body py-3 px-4">
                            <p class="m-0 survey-head">Total Orders</p>
                            <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                              <div>
                                <h3 class="m-0 survey-value"><?php echo $totalOrdersCount; ?></h3>
                                <p class="text-success m-0">-310 avg. sales</p>
                              </div>
                              <div id="orderChart" class="flot-chart"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row" style="margin-top:100px;">
                      <div class="col-sm-6">
                        <p class="text-muted mb-0">Overall Revenue List<b>Courses Enrolled</b>
                        </p>
                      </div>
                      <div class="col-sm-6">
                        <p class="mb-0 text-muted">Sales Revenue</p>
                        <h5 class="d-inline-block survey-value mb-0"> ₹<?php echo $overalltotalAmount; ?> </h5>
                        <p class="d-inline-block text-danger mb-0"> last 8 months </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
        </div>
        <!-- main-panel ends -->


<?php include 'footer.php'?>
