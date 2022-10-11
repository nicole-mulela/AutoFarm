<?php
require_once("dbconnect.php");
session_start();

$un=$_POST['userName'];
$ue=$_POST['userEmail'];
$pwd=$_POST['userPass'];

//check if email exists
$qry="SELECT * FROM users WHERE UserEmail='$ue'";

$result=mysqli_query($conn,$qry) ;

if (mysqli_num_rows($result) > 0) {
    //Error message
    $_SESSION['message']="An account with this Email exists. Try again";
    $_SESSION['msg_type']="danger";
    $url=("../Authentication/registration.php");
    header("location: $url");
}else{
    //create new user
    $qry=" INSERT INTO users(UserName,UserEmail,UserPassword) VALUES ('$un','$ue','$pwd')";

    //$result=mysqli_query($conn,$qry) ;
        
    if(mysqli_query($conn,$qry) )
    {
        
        echo '<script> alert("Login Successful");</script>';
        //Successful registration message
        $_SESSION['message']="Account has been created. Login to proceed";
        $_SESSION['msg_type']="success";

            $url=("../Authentication/login.php");
            header("location: $url");
        
    }
    else{
        //Unsuccessful profile edit message
        $_SESSION['message']="Error in registration";
        $_SESSION['msg_type']="danger";
        $url=("../Authentication/registration.php");
        header("location: $url");
    }

}



?>