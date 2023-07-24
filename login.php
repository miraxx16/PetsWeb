<?php
	include ('database/connection.php');
	if (isset($_SESSION['user_account'])) {
	//unset($_SESSION['cid']);
	    unset($_SESSION['user_account']);
	}
?>
<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/poppins.css">

    <title>Pets Weeb | Login</title>
</head>

<body>
<?php include('preloader.php'); ?>
    <?php include 'nav.php';?>
    <div class="content-wrapper" >
        <div class="container login-container d-flex justify-content-center ">

            <div class="row">
                <div class="col-md-6 form-img">

                    <img src="assets/gallery/pets.jpg" class="img-fluid">

                </div>
                <div class=" col-md-6 login-form " >
                    <h1>Login</h1>
                    <div class="login-form2" >
                        <form class="row g-3 " action="query.php" method="post"  autocomplete ="off">
                            
                            <?php if(isset($_GET['error'])){?>
                                <p id="error"><?php echo $_GET['error'];?></p>
                            <?php } ?>
                            <div class="col-12">
                                <label for="username" class="form-label" >Username</label>
                                <input type="username" class="form-control" id="name" name="username" required="">
                            </div>
                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control validate" id="password" placeholder=""
                                    name="password" required="">
                            </div>

                    </div>
                    <div class="col-12 signup-button d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" name="btn_login" onlick="login_load()">Login</button>

                    </div>
                    <div class="col-12 login-button d-flex justify-content-center">
                        <span>Don't have an account?<a href="signup.php">Signup</a></span>
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