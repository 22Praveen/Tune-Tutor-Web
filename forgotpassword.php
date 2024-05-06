<?php

require 'vendor/autoload.php'; // Include Composer's autoloader

$mongoClient = new MongoDB\Client('mongodb+srv://praveen:Byf0rEebirBOILam@cluster0.9mzctp3.mongodb.net/');
$collection = $mongoClient->tunetutor->userdetails;

$message = "Registration successful";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $ph_no = $_POST['ph_no'];
    $address = $_POST['address'];

    $user = [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'ph_no' => $ph_no,
        'address' => $address,
        // 'password' => password_hash($password, PASSWORD_BCRYPT),
    ];

    try {
        $collection->insertOne($user);
        echo "<script type='text/javascript'>alert('$message');window.location.href='login.php';</script>";
    } catch (MongoDB\Driver\Exception\Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

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
  <title>Courses</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

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

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="signup-styles/css/style.css">

    <style>
        span {
                font-family: 'Pacifico', cursive;
                color:white;
            }
      </style>

	</head>
	<body style="background-image: linear-gradient(270deg, rgb(124, 50, 255) 0%, rgb(199, 56, 216) 100%);">
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="courses.html">Courses</a></li>
                    <!-- Dropdown -->
                    <!-- <li class="dropdown">
                      <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        Pages
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="elements.html">Elements</a>
                        <a class="dropdown-item" href="course-details.html">Course Details</a>
                      </div>
                    </li> -->
                    
                    <li><a href="contacts.html">Contacts</a></li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        Join Now
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="login.php">Login</a>
                        <a class="dropdown-item" href="signup.php">Signup</a>
                      </div>
                    </li>
                    <!-- <li><button class="button-10" role="button">Login</button></li> -->
                    <!-- HTML !-->
        <!-- HTML !-->  
                  </ul>
                </div>
              </div>
            </nav>
            
          </header>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 d-flex img d-flex align-items-end" style="background-image: url(signup-styles/images/radio.jpg);">
							<div class="text w-100">
								<h2 class="mb-4">Welcome to forgot password form</h2>
								<p>Embark on a musical journey like never before! Sign up today to unlock a world of harmonious possibilities. Whether you're a budding musician or a seasoned pro, our platform is tailored to meet your musical aspirations.</p>
							</div>
			      </div>
						<div class="login-wrap p-4 p-md-5">
	      			<h3 class="mb-3"></h3>
							<form action="" method='post' class="signup-form">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group d-flex align-items-center">
					      			<label class="label" for="name">Full Name</label>
					      			<input type="text" name='username' class="form-control" placeholder="Full Name">
					      		</div>
									</div>
									<div class="col-md-12">
										<div class="form-group d-flex align-items-center">
					      			<label class="label" for="email">Email Address</label>
					      			<input type="text" name='email' class="form-control" placeholder="johndoe@email.com">
					      		</div>
									</div>
                  <div class="col-md-12">
										<div class="form-group d-flex align-items-center">
				            	<label class="label" for="password">Password</label>
				              <input type="password" name='password' class="form-control" placeholder="Password">
				            </div>
									</div>
									<div class="col-md-12">
										<div class="form-group d-flex align-items-center">
					      			<label class="label" for="phone">Re-enter password</label>
					      			<input type="text" name='ph_no' class="form-control" placeholder="+01">
					      		</div>
									</div>
									
									<div class="col-md-12">
										<div class="form-group d-flex align-items-center">
					      			<label class="label" for="website">Address</label>
					      			<input type="text" name='address' class="form-control" placeholder="Address">
					      		</div>
									</div>
									<div class="col-md-12 my-4">
										<div class="form-group">
				            	<div class="w-100">
					            	<label class="checkbox-wrap checkbox-primary">I agree all statements in terms of service
												  <input type="checkbox" checked>
												  <span class="checkmark"></span>
												</label>
											</div>
				            </div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
				            	<button type="submit" class="btn btn-secondary submit p-3">Update password</button>
				            </div>
									</div>
								</div>

		          </form>
		          <div class="social-wrap">
		          	<p class="or">
		          		<span>or</span>
		          
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="signup-styles/js/jquery.min.js"></script>
  <script src="signup-styles/js/popper.js"></script>
  <script src="signup-styles/js/bootstrap.min.js"></script>
  <script src="signup-styles/js/main.js"></script>

  <!-- navbar -->
	
<!--===============================================================================================-->	
<script src="login-stylesvendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login-stylesvendor/bootstrap/js/popper.js"></script>
	<script src="login-stylesvendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login-stylesvendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login-stylesvendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="login-stylesjs/main.js"></script>

    <!-- login end -->

 
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
  <script>
    const form = document.querySelector("form");
eField = form.querySelector(".email"),
eInput = eField.querySelector("input"),
pField = form.querySelector(".password"),
pInput = pField.querySelector("input");

form.onsubmit = (e)=>{
  e.preventDefault(); //preventing from form submitting
  //if email and password is blank then add shake class in it else call specified function
  (eInput.value == "") ? eField.classList.add("shake", "error") : checkEmail();
  (pInput.value == "") ? pField.classList.add("shake", "error") : checkPass();

  setTimeout(()=>{ //remove shake class after 500ms
    eField.classList.remove("shake");
    pField.classList.remove("shake");
  }, 500);

  eInput.onkeyup = ()=>{checkEmail();} //calling checkEmail function on email input keyup
  pInput.onkeyup = ()=>{checkPass();} //calling checkPassword function on pass input keyup

  function checkEmail(){ //checkEmail function
    let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; //pattern for validate email
    if(!eInput.value.match(pattern)){ //if pattern not matched then add error and remove valid class
      eField.classList.add("error");
      eField.classList.remove("valid");
      let errorTxt = eField.querySelector(".error-txt");
      //if email value is not empty then show please enter valid email else show Email can't be blank
      (eInput.value != "") ? errorTxt.innerText = "Enter a valid email address" : errorTxt.innerText = "Email can't be blank";
    }else{ //if pattern matched then remove error and add valid class
      eField.classList.remove("error");
      eField.classList.add("valid");
    }
  }

  function checkPass(){ //checkPass function
    if(pInput.value == ""){ //if pass is empty then add error and remove valid class
      pField.classList.add("error");
      pField.classList.remove("valid");
    }else{ //if pass is empty then remove error and add valid class
      pField.classList.remove("error");
      pField.classList.add("valid");
    }
  }

  //if eField and pField doesn't contains error class that mean user filled details properly
  if(!eField.classList.contains("error") && !pField.classList.contains("error")){
    window.location.href = form.getAttribute("action"); //redirecting user to the specified url which is inside action attribute of form tag
  }
}
  </script>
	</body>
</html>

