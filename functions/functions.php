<?php
include('database/connection.php');
function uidExists($con, $username, $email){
    $sql = "SELECT * FROM user_account where username = ?;";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:signup.php?stmt_failed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createUser($name, $email, $username, $password, $inputAddress, $gender, $contact, $pro_img, $date, $petType, $breed, $recent ){
    $sql = "INSERT into user_account (name, email, username, password, address, gender, contact, pro_image, date_created,pet_type, breed_type, recent_post) VALUES(?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:signup.php?stmt_failed");
        exit();
    }
    $hash_pwd = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssssssssss",$name, $email, $username, $hash_pwd, $inputAddress, $gender, $contact, $pro_img, $date, $petType, $breed, $recent );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:login.php?succesfullysignup");
    exit();
}

