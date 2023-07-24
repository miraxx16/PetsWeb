<?php

$host = "localhost";
//username
$username = "root";
//password
$pass = "";
//database name
$db = "pets_site_db";

/* End Config */

$con = mysqli_connect($host, $username, $pass, $db) or die(mysqli_error($con));
if ($con == true) {

}

session_start();
?>