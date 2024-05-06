<?php
session_start();
?>


<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="colorlib" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Course Details</title>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
    <!--
      CSS
      =============================================
    -->
    <link rel="stylesheet" href="css/linearicons.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/hexagons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
    <style>
        span {
                font-family: 'Pacifico', cursive;
                color:white;
            }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }

        .wrapper{
        background: #f6f6f6;
        max-width: 360px;
        width: 100%;
        border-radius: 10px;
        box-shadow: 0px 10px 15px rgba(0,0,0,0.1);
        }
        .wrapper .content{
        padding: 30px;
        display: flex;
        align-items: center;
        flex-direction: column;
        }
        .wrapper .outer{
        height: 135px;
        width: 135px;
        overflow: hidden;
        }
        .outer .emojis{
        height: 500%;
        display: flex;
        flex-direction: column;
        }
        .outer .emojis li{
        height: 20%;
        width: 100%;
        list-style: none;
        transition: all 0.3s ease;
        }
        .outer li img{
        height: 100%;
        width: 100%;
        }
        #star-2:checked ~ .content .emojis .slideImg{
        margin-top: -135px;
        }
        #star-3:checked ~ .content .emojis .slideImg{
        margin-top: -270px;
        }
        #star-4:checked ~ .content .emojis .slideImg{
        margin-top: -405px;
        }
        #star-5:checked ~ .content .emojis .slideImg{
        margin-top: -540px;
        }
        .wrapper .stars{
        margin-top: 30px;
        }
        .stars label{
        font-size: 30px;
        margin: 0 3px;
        color: #ccc;
        }
        #star-1:hover ~ .content .stars .star-1,
        #star-1:checked ~ .content .stars .star-1,

        #star-2:hover ~ .content .stars .star-1,
        #star-2:hover ~ .content .stars .star-2,
        #star-2:checked ~ .content .stars .star-1,
        #star-2:checked ~ .content .stars .star-2,

        #star-3:hover ~ .content .stars .star-1,
        #star-3:hover ~ .content .stars .star-2,
        #star-3:hover ~ .content .stars .star-3,
        #star-3:checked ~ .content .stars .star-1,
        #star-3:checked ~ .content .stars .star-2,
        #star-3:checked ~ .content .stars .star-3,

        #star-4:hover ~ .content .stars .star-1,
        #star-4:hover ~ .content .stars .star-2,
        #star-4:hover ~ .content .stars .star-3,
        #star-4:hover ~ .content .stars .star-4,
        #star-4:checked ~ .content .stars .star-1,
        #star-4:checked ~ .content .stars .star-2,
        #star-4:checked ~ .content .stars .star-3,
        #star-4:checked ~ .content .stars .star-4,

        #star-5:hover ~ .content .stars .star-1,
        #star-5:hover ~ .content .stars .star-2,
        #star-5:hover ~ .content .stars .star-3,
        #star-5:hover ~ .content .stars .star-4,
        #star-5:hover ~ .content .stars .star-5,
        #star-5:checked ~ .content .stars .star-1,
        #star-5:checked ~ .content .stars .star-2,
        #star-5:checked ~ .content .stars .star-3,
        #star-5:checked ~ .content .stars .star-4,
        #star-5:checked ~ .content .stars .star-5{
        color: #fd4;
        }
        .wrapper .footer{
        border-top: 1px solid #ccc;
        background: #f2f2f2;
        width: 100%;
        height: 55px;
        padding: 0 20px;
        border-radius: 0 0 10px 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        }
        .footer span{
        font-size: 17px;
        font-weight: 400;
        }
        .footer .text::before{
        content: "Rate your experience";
        }
        .footer .numb::before{
        content: "0 out of 5";
        }
        #star-1:checked ~ .footer .text::before{
        content: "I just hate it";
        }
        #star-1:checked ~ .footer .numb::before{
        content: "1 out of 5";
        }
        #star-2:checked ~ .footer .text::before{
        content: "I don't like it";
        }
        #star-2:checked ~ .footer .numb::before{
        content: "2 out of 5";
        }
        #star-3:checked ~ .footer .text::before{
        content: "This is awesome";
        }
        #star-3:checked ~ .footer .numb::before{
        content: "3 out of 5";
        }
        #star-4:checked ~ .footer .text::before{
        content: "I just like it";
        }
        #star-4:checked ~ .footer .numb::before{
        content: "4 out of 5";
        }
        #star-5:checked ~ .footer .text::before{
        content: "I just love it";
        }
        #star-5:checked ~ .footer .numb::before{
        content: "5 out of 5";
        }
        input[type="radio"]{
        display: none;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
    <!-- ================ Start Header Area ================= -->
    <header class="default-header">
        <nav class="navbar navbar-expand-lg  navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <span>
                      Tune Tutor 
                    </span>
                  </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="lnr lnr-menu"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        
                    <?php
            

            // Check if the user is logged in
            if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
                // User is logged in
                echo '<li><a href="home.php">Home</a></li>';
                echo '<li><a href="mycourse.php">My Course</a></li>';
                echo '<li><a href="courses.php">Courses</a></li>';
                echo '<li><a href="blog-home.html">Blog</a></li>';
                echo '<li><a href="logout.php">Logout</a></li>';
            } else {
                echo'
                <li><a href="index.html">Home</a></li>
                <li><a href="courses.php">Courses</a></li>            
                <li><a href="contacts.html">Contacts</a></li>
                <li class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                    Join Now
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="login.php">Login</a>
                    <a class="dropdown-item" href="signup.php">Signup</a>
                </div>
                </li>';
            }
            ?>
                    <!-- end login -->

                    </ul>
                </div>
            </div>
        </nav>
        
    </header>
    <!-- ================ End Header Area ================= -->

    <!-- ================ start banner Area ================= -->
    <section class="banner-area">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 banner-right">
                    <h1 class="text-white">
                        Course Details
                    </h1>
                   
                    <div class="link-nav">
                        <span class="box">
                            <a href="index.html">Home </a>
                            <i class="lnr lnr-arrow-right"></i>
                            <a href="courses.html">Courses </a>
                            <i class="lnr lnr-arrow-right"></i>
                            <a href="course-details.html">Course Details</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ End banner Area ================= -->
    <?php

include 'vendor/autoload.php';

// MongoDB connection
$mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
$collection = $mongoClient->tunetutor->coursedetails;

// Get the course ID from the URL parameter
$courseId = $_GET['id'] ?? null;
$_SESSION['courseid'] = $courseId;
// Check if the ID is provided
if ($courseId) {
    // Convert the string ID to MongoDB\BSON\ObjectID
    $objectId = new MongoDB\BSON\ObjectID($courseId);

    // Query to find the course by ID
    $course = $collection->findOne(['_id' => $objectId]);

    // Concatenate the base path with the stored image path
    $basePath = "admin/template/courseimage/"; // Change this to your actual base URL
    $imagePath = $basePath . $course['c_img_filename']; 
    $originalDate = $course['last_update'];
    $newDate = date("d-m-Y", strtotime($originalDate));

} else {
    echo "Course ID is not provided.";
}

?>

    <!--================ Start Course Details Area =================-->
    <section class="course-details-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course-details-left">
                    <div class="main-image">
                        <img class="img-fluid" style="height:500px; width:750px;" src="<?= $imagePath ?>" alt="">
                    </div>
                    <div class="content-wrapper">
                        <h4 class="title">Objectives</h4>
                        <div class="content">
                        <?= $course['objective'] ?>                            
                        </div>

                        <h4 class="title">Eligibility</h4>
                        <div class="content">
                        <?= $course['eligibility'] ?>
                        </div>

<?php
    $c_outline = $course['c_outline'];
    $outlineArray = explode(', ', $c_outline);
?>

<h4 class="title">Course Outline</h4>
<div class="content">
    <ul class="course-list">
    <?php
    require 'vendor/autoload.php'; // Include Composer's autoloader

    $mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');

    // Prepare the query to check if the user has enrolled in the course
    try {
        $user_id = isset($_SESSION["uid"]) ? $_SESSION["uid"] : null;
        $product_id = isset($_SESSION["courseid"]) ? $_SESSION["courseid"] : null;
        $filter = [];

        if ($user_id !== null && $product_id !== null) {
            $filter = [
                'user_id' => $user_id,
                'product_id' => $product_id
            ];
        }
    } catch (Exception $e) {
        // Handle any exceptions that occur during the try block
        // For example, log the exception or show a friendly error message
        echo "An error occurred: " . $e->getMessage();
    }

    // Function to check if the user is enrolled in the course
    function isEnrolled($collection, $filter) {
        try {
            // Execute the query
            $result = $collection->findOne($filter);

            // Check if the user has enrolled in the course
            return $result ? true : false;
        } catch (MongoDB\Driver\Exception\Exception $e) {
            // Handle any exceptions that may occur
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    // Select the collection
    $collection = $mongoClient->tunetutor->course_enrollment;

    // Iterate through the outlineArray and display course outlines
    foreach ($outlineArray as $outline) {
        echo '<li class="justify-content-between d-flex">';
        echo '<p>' . $outline . '</p>';

        // Check if the user is enrolled in the course before displaying the "View Course" button
        if (isset($_SESSION["uid"]) && isEnrolled($collection, $filter)) {
            echo '<a class="btn text-uppercase" href="singlevideo.php?course=' . $outline . '">View Course</a>';
        } else {
            echo '<a class="btn text-uppercase" href="login.php">Enroll course</a>';
        }

        echo '</li>';
    }
    ?>
   

<script>
// Function to display the enrollment message
function showEnrollMessage() {
    alert('Please enroll in the course.');
}
</script>


    </ul>
</div>

                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Trainer’s Name</p>
                                <span class="or"><?= $course['t_name'] ?></span>
                            </a>
                        </li>
                        <li >
                            <a class="justify-content-between d-flex" href="#">
                                <p>Course Fee </p>
                                <span style="color:black;">₹ <?= $course['c_fee'] ?></span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Instrument </p>
                                <span style="color:black;"> <?= $course['instrument'] ?></span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Last Update </p>
                                <span style="color:black;"><?php echo $newDate; ?></span>
                            </a>
                        </li>
                    </ul>
                    <?php
require 'vendor/autoload.php'; // Include Composer's autoloader

$mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
$enrolled = 'null';
// Prepare the query to check if the user has enrolled in the course
try {
    
    $user_id = isset($_SESSION["uid"]) ? $_SESSION["uid"] : null;
    $product_id = isset($_SESSION["courseid"]) ? $_SESSION["courseid"] : null;
    $enrolled = "no data";
    if ($user_id !== null && $product_id !== null) {
        $filter = [
            'user_id' => $user_id,
            'product_id' => $product_id
        ];

        // Function to check if the user is enrolled in the course
        function isEnroll($collection, $filter) {
            try {
                // Execute the query
                $result = $collection->findOne($filter);

                // Check if the user has enrolled in the course
                return $result ? true : false;
            } catch (MongoDB\Driver\Exception\Exception $e) {
                // Handle any exceptions that may occur
                echo "Error: " . $e->getMessage();
                return false;
            }
        }

        // Select the collection
        $collection = $mongoClient->tunetutor->course_enrollment;

        // Check if the user is enrolled in the course
        $enrolled = isEnroll($collection, $filter);
    } else {
        // Handle case where user_id or product_id is not set
        // For example, throw an exception or log an error
        $enrolled = "no session";
        echo "Login before accessing the course";
    }
} catch (Exception $e) {
    // Handle any exceptions that occur during the try block
    // For example, log the exception or show a friendly error message
    echo "An error occurred: " . $e->getMessage();
}
?>

<?php if ($enrolled === true): ?>
    <!-- Display "Course Enrolled" button if the user is enrolled -->
    <a href="#" class="btn text-uppercase enroll">Course Enrolled</a>
<?php elseif (!isset($_SESSION["uid"]) || $_SESSION["uid"] === null): ?>
    <!-- Display login prompt if session data is missing -->
    <a href="login.php" class="btn text-uppercase enroll" onclick="alert('Please login before enrolling.');">Login to enroll</a>
<?php else: ?>
    <!-- Display "Enroll the course" button if the user is not enrolled -->
    <a href="javascript:void(0)" class="btn text-uppercase enroll buy_now"  data-img="//www.tutsmake.com/wp-content/uploads/2019/03/c05917807.png" data-amount="<?= $course['c_fee'] ?>" data-id="1">Enroll the course</a>




<script>
function enrollCourse() {
    // Check if the user is logged in (you can replace this with your own authentication check logic)
    var userLoggedIn = <?php echo isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true ? 'true' : 'false'; ?>;
    
    if (userLoggedIn) {
        // User is logged in, perform enrollment action
        // You can add your enrollment logic here
        alert("You have successfully enrolled in the course!");
    } else {
        // User is not logged in, display message
        alert("Please log in first to enroll in this course.");
        // You can redirect the user to the login page or display a login modal here
    }
}
</script>

<?php endif; ?>


                    <h4 class="title">Reviews</h4>
                    <div class="content">
                        <div class="review-top row pt-40">
                            <div class="col-lg-12">
                                <h6 class="mb-15">Provide Your Rating</h6>
                            </div>
                        <form action="rating.php" method='POST'>
                            <!-- rating start -->
                            <div class="wrapper">
                                <input type="radio" name="rate" value="1" id="star-1">
                                <input type="radio" name="rate" value="2" id="star-2">
                                <input type="radio" name="rate" value="3" id="star-3">
                                <input type="radio" name="rate" value="4" id="star-4">
                                <input type="radio" name="rate" value="5" id="star-5">
                                <div class="content">
                                <div class="outer">
                                    <div class="emojis">
                                    <li class="slideImg"><img src="img/emoji-1.png" alt=""></li>
                                    <li><img src="img/emoji-2.png" alt=""></li>
                                    <li><img src="img/emoji-3.png" alt=""></li>
                                    <li><img src="img/emoji-4.png" alt=""></li>
                                    <li><img src="img/emoji-5.png" alt=""></li>
                                    </div>
                                </div>
                                <div class="stars">
                                    <label for="star-1" class="star-1 fas fa-star"></label>
                                    <label for="star-2" class="star-2 fas fa-star"></label>
                                    <label for="star-3" class="star-3 fas fa-star"></label>
                                    <label for="star-4" class="star-4 fas fa-star"></label>
                                    <label for="star-5" class="star-5 fas fa-star"></label>
                                </div>
                                </div>
                                <div class="footer">
                                <span class="text"></span>
                                <span class="numb"></span>
                                </div>
                            </div>
                            <!-- rating end -->
                            </div>
                            <div class="feedeback">
                            <h6 class="mb-10">Your Feedback</h6>
                            <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                            
                            <div class="mt-10 text-right">
                                <button type="submit" class="btn text-center text-uppercase enroll">Submit</button>
                            </div>
                            </div>
                        </form>
                        <div class="comments-area mb-30">
                            <!-- individual review start -->
                            <?php
require 'vendor/autoload.php'; // Include Composer's autoloader

$mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
$collection = $mongoClient->tunetutor->coursedetails;
$userCollection = $mongoClient->tunetutor->userdetails;

$course_id = $_SESSION['courseid'];

try {
    // Find the document with the specified course_id
    $result = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($course_id)]);

    if ($result && isset($result->review)) {
        // Loop through each review in the document and display them
        foreach ($result->review as $review) {
            // Fetch user details from userdetails collection based on user_id
            $userDetails = $userCollection->findOne(['_id' => new MongoDB\BSON\ObjectID($review->user_id)]);

            if ($userDetails) {
                ?>
                <div class="comment-list">
                    <div class="single-comment single-reviews justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img style="width:50px; height:50px;" src="img/man.png" alt="">
                            </div>
                            <div class="desc">
                                <h5><a href="#"><?php echo $userDetails->name; ?></a>
                                    <div class="star">
                                        <?php
                                        // Loop to display star ratings based on the 'ratings' field
                                        for ($i = 1; $i <= 5; $i++) {
                                            if ($i <= $review->ratings) {
                                                echo '<span class="fa fa-star checked"></span>';
                                            } else {
                                                echo '<span class="fa fa-star"></span>';
                                            }
                                        }
                                        ?>
                                    </div>
                                </h5>
                                <p class="comment">
                                    <?php echo $review->review_text; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                echo "User details not found for user_id: " . $review->user_id;
            }
        }
    } else {
        echo "No reviews found for this course.";
    }
} catch (MongoDB\Driver\Exception\Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

                            <!-- end individual review -->
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->

    <!-- ================ start footer Area ================= -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                            <button class="click-btn btn btn-default text-uppercase">subscribe</button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center">
                <p class="footer-text m-0 col-lg-8 col-md-12">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |<i class="fa fa-heart-o" aria-hidden="true"></i><a href="#" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                <div class="col-lg-4 col-md-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================ End footer Area ================= -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/hexagons.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/main.js"></script>

    <!-- payment -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_1ITMBhQFXyD7lk",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "Tune Tutor",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount 
            }, 
            success: function (msg) {

               window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.`preventDefault`();
  });

</script>

<script src=""></script>

<script>
 
  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_1ITMBhQFXyD7lk", // secret key id
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "Tune Tutor",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount 
            }, 
            success: function (msg) {
 
               window.location.href = 'payment-success.php';
            }
        });
      
    },
 
    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });
 
</script>
</body>

</html>