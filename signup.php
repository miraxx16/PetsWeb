<?php
include('functions/custom_function.php');
$customFunction = new CustomFunction();
include('database/connection.php');
?>
<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/poppins.css">
    
    <title>Pets Dating Site | Signup</title>
 </head>

<body>
<?php include('preloader.php'); ?>
<?php include 'nav2.php';?>	
	<div class="content-wrapper ">
		<div class="container signup-container ">
			
			<div class="row d-flex align-items-center">
				<div class="col-md-6">
					
					<div class="form-image">
							<img src="assets/gallery/pets.jpg" class="img-fluid">
					</div>
					
				</div>
				<div class="col-md-6 signup-form" style="border: 1px solid lavender" >
					<h1>Sign Up</h1>
					<div>
						<form class="row g-3" action="query.php" method="post" autocomplete ="off">
						  <div class="col-md-6 form-group">
						    <label for="name" class="form-label">Pet Name</label>
						    <input type="name" class="form-control" id="name" required="" name="name">
						  </div>
						  <div class="col-md-6 form-group">
						    <label for="email" class="form-label">Email</label>
						    <input type="email" class="form-control validate" id="email" required="" placeholder="@" name="email">
						  </div>
						  <div class="col-12 form-group">
						    <label for="inputAddress" class="form-label">Address</label>
						    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required="" name="inputAddress">
						  </div>

						  <div class="col-md-4 form-group">
						  	<label class="form-label">Gender</label>
						  	<div class="d-flex">
						  		<!-- <input type="radio" id="male" name="gender" value="male">
								  <label for="html">Male</label>
								  <input type="radio" id="female" name="gender" value="female">
								  <label for="css">Female</label> -->
								<select name="gender" id="gender" aria-hidden="true" required="">
									<option>Male</option>
									<option>Female</option>
								</select>
						  	</div>
						  </div>
						  <div class="col-md-4 form-group">
						  	<label class="form-label">Age</label>
						  	<input type="text" name="age" class="form-control" placeholder="years" required="" id="age">
						  </div>
						  <div class="col-md-4 form-group">
						  	<label class="form-label">Contact #</label>
						  	<input type="text" name="contact" class="form-control" placeholder="+639">
						  </div>
						  <div class="col-md-6 form-group">
						  	<label class="form-label">Pet Class</label>
						  	<div>
						  		<select name="petType" id="petType">
								    <option value="">Pet Type</option>
								    <?php echo $customFunction->pet_type($con); ?>
								</select>
						  	</div>
						  </div>
						   <div class="col-md-6 form-group">
						  	<label class="form-label">Breed Type</label>
						  	<input type="text" name="breed" class="form-control" required="" id="breed">
						  </div>
						  <div class="col-md-6 form-group">
						  	<label class="form-label">Username</label>
						  	<input type="text" name="username" class="form-control" required="" id="username">
						  </div>
						  
						  <div class="col-md-6 form-group">
						  	<label class="form-label">Password</label>
						  	<input type="password" name="password" class="form-control" required="" id="password">
						  </div>
						  <!--  <div class="col-12">
						  	<label for="myfile" class="form-label">Profile Image:</label>
						  	<div>
						  		<input type="file" id="proimg" name="proimg" required="" accept="proimg/*">
						  	</div>
							
						  </div> -->
						  <div class="col-12 signup-button d-flex justify-content-between form-group">
						    <button type="submit" class="btn btn-primary" name="btn_signup" id="btn_signup">Sign up</button>
						    <span>Already have an account?<a href="login.php">Login</a></span>
						  </div>
						 
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<?php include'footer2.php'?>

	<!-- JavaScript -->
    <?php include'scripts.php'; ?>
</body>
</html>