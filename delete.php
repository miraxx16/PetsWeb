<?php include('database/connection.php');



$postID = $_GET['id'];




$query = mysqli_query($con,"DELETE FROM image_uploads where postID = '$postID'");



if ($query) {
    /*$_SESSION['mess'] = 'add';*/
    echo "<script type='text/javascript'>window.location.replace('profile.php');alert('Successfully Deleted!')</script>";

}
