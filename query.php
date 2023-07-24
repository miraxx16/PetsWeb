<?php
	include('database/connection.php');
	/*Signup query*/
	if(isset($_POST['btn_signup'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$inputAddress = $_POST['inputAddress'];
		$gender = $_POST['gender'];
		$age = $_POST['age'];
		$contact = $_POST['contact'];
		$petType = $_POST['petType'];
		$breed = $_POST['breed'];
		$username = $_POST['username'];
		$password = $_POST['password'];
        $pro_img = 'cartoon-dog.gif';
        $recent = '0';
		/*$proimg = $_POST['proimg'];*/
		date_default_timezone_set('Asia/Manila');
		$date = date('m/d/Y h:i:s a', time());
        $hashPwd = password_hash($password, PASSWORD_DEFAULT);
          
    //check if username already exist in the database
    $check_user = mysqli_query($con, "SELECT * FROM user_account where username = '" . $username . "'") or die(mysqli_errno($con));

    $count = mysqli_num_rows($check_user);
    //if count > 0, there is an existing username then user will be ask to choose another username- else the data will be inserted into the database.
    if ($count > 0) {
        header("location:signup.php?usernameExists");
        exit();
    } else {

         $signup = mysqli_query($con,"INSERT into user_account(name,email,username,password,address,gender,contact,pro_image,date_created,pet_type,breed_type) VALUES('$name','$email','$username','$hashPwd','$inputAddress','$gender','$contact','cartoon-dog.gif','$date','$petType','$breed')") or die(mysqli_error($con));
         
         if($signup){
         	echo "<script>
				alert('You have successfully registered!');
				window.location.href='login.php';
				</script>";
         	} 
         }  
				
	}


/*	Login query*/
if(isset($_POST['btn_login'])){
    // function validate($data){
    //     $data = trim($data);
    //     $data = stripcslashes($data);
    //     $data = htmlspecialchars($data);
    // }


	$username = $_POST['username'];
	$password = $_POST['password'];
    $querylogin =  "SELECT * FROM user_account  where BINARY username = '".$username."'";
    $runquery = mysqli_query($con, $querylogin);
    $row = mysqli_fetch_assoc($runquery);
    $check_row = mysqli_num_rows($runquery);
   
    if(password_verify($password, $row['password']) === true && $check_row > 0){
        $_SESSION['user_account'] = $row['userID'];
        echo "<script type='text/javascript'>window.location.replace('index.php');</script>";
       
    }else if($check_row == 0){
        header("location:login.php?error=Username doesn't exist");
        exit();
    }else{
        header("location:login.php?error=Password is incorrect");
        exit();
        
    }
	
}

/*post query*/



if (isset($_POST['btn-post'])){
	$user_id = $_GET['user_id'];
	$post_description = $_POST['post_des'];
	


	date_default_timezone_set('Asia/Manila');
	
	





	/*start query*/


        $uploadsDir = "assets/gallery/";
        $allowedFileType = array('jpg','png','jpeg','gif');

       

        // echo   $totalFileSize;
        // Velidate if files exist
        if (!empty(array_filter($_FILES['fileUpload']['name']))) {
            
            // Loop through file items
            foreach($_FILES['fileUpload']['name'] as $id=>$val){
                // Get files upload path
                $fileName        = $_FILES['fileUpload']['name'][$id];
                $tempLocation    = $_FILES['fileUpload']['tmp_name'][$id];
                $targetFilePath  = $uploadsDir . $fileName;
                $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $uploadDate      = date('Y-m-d H:i:s');
                $post_id = $user_id ."pet_img" . $uploadDate;
                $post_id2 = $user_id  . $uploadDate;
                $uploadOk = 1;
                if(in_array($fileType, $allowedFileType)){
                        if(move_uploaded_file($tempLocation, $targetFilePath)){
                            $sqlVal = "('".$post_description."','".$fileName."', '".$uploadDate."', '".$user_id."', '".$post_id."')";
                            
                        }                     
                }
                // Add into MySQL database
                if(!empty($sqlVal)) {
                    $insert = $con->query("INSERT INTO image_uploads (postDes,postImages, postDate, userID, postID) VALUES $sqlVal");
                    
                   if($insert){
                    $recent_post = mysqli_query($con,"UPDATE user_account set recent_post = '$post_id' where userID ='$user_id'");
                   }
                }
                $insert2 = mysqli_query($con,"INSERT INTO post_reacts (userID, postID) VALUES('$user_id','$post_id')");

            }
        } else {
            // Error
            $uploadDate      = date('Y-m-d H:i:s');
           
            $post_id2 = $user_id  . $uploadDate;
            $insert_noImg = mysqli_query($con, "INSERT INTO image_uploads (postDes, postDate, userID, postID) VALUES ('".$post_description."', '".$uploadDate."', '".$user_id."', '".$post_id2."')");
            // echo  "<script type='text/javascript'>alert('Not save');window.location.replace('index.php');</script>";
        }

    
        echo  "<script type='text/javascript'>window.location.replace('index.php');</script>";
}

if (isset($_POST['btn-post2'])){
	$user_id = $_GET['user_id'];
	$post_description = $_POST['post_des'];
	


	date_default_timezone_set('Asia/Manila');
	
	





	/*start query*/


        $uploadsDir = "assets/gallery/";
        $allowedFileType = array('jpg','png','jpeg','gif');

      
        if (!empty(array_filter($_FILES['fileUpload']['name']))) {
            
            // Loop through file items
            foreach($_FILES['fileUpload']['name'] as $id=>$val){
                // Get files upload path
                $fileName        = $_FILES['fileUpload']['name'][$id];
                $tempLocation    = $_FILES['fileUpload']['tmp_name'][$id];
                $targetFilePath  = $uploadsDir . $fileName;
                $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $uploadDate      = date('Y-m-d H:i:s');
                $post_id = $user_id ."pet_img" . $uploadDate;
                $post_id2 = $user_id  . $uploadDate;
                $uploadOk = 1;
                if(in_array($fileType, $allowedFileType)){
                        if(move_uploaded_file($tempLocation, $targetFilePath)){
                            $sqlVal = "('".$post_description."','".$fileName."', '".$uploadDate."', '".$user_id."', '".$post_id."')";
                            
                        }                     
                }
                // Add into MySQL database
                if(!empty($sqlVal)) {
                    $insert = $con->query("INSERT INTO image_uploads (postDes,postImages, postDate, userID, postID) VALUES $sqlVal");
                    
                   if($insert){
                    $recent_post = mysqli_query($con,"UPDATE user_account set recent_post = '$post_id' where userID ='$user_id'");
                   }
                }
                $insert2 = mysqli_query($con,"INSERT INTO post_reacts (userID, postID) VALUES('$user_id','$post_id')");

            }
        } else {
            // Error
            $uploadDate      = date('Y-m-d H:i:s');
           
            $post_id2 = $user_id  . $uploadDate;
            $insert_noImg = mysqli_query($con, "INSERT INTO image_uploads (postDes, postDate, userID, postID) VALUES ('".$post_description."', '".$uploadDate."', '".$user_id."', '".$post_id2."')");
            // echo  "<script type='text/javascript'>alert('Not save');window.location.replace('index.php');</script>";
        }

       
        echo  "<script type='text/javascript'>window.location.replace('profile.php');</script>";
}