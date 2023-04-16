<?php
include_once 'env.php';
session_start();

$checkInfo=$_REQUEST;
$email=$checkInfo['email'];
$password=$checkInfo['password'];
var_dump($checkInfo);

$query ="SELECT* FROM user_info WHERE email='$email'";
$reponse=mysqli_query($conn,$query);
$data =mysqli_fetch_assoc($reponse);

$email_found=$reponse->num_rows;

if($email_found){
    $verifyPassword=password_verify($password,$data['password']);
    echo $verifyPassword;
    if($verifyPassword){
        $_SESSION['data']=$data;
        header('location:../backend/daseboard.php');
    }
    else{
        $_SESSION['Not_Match']="You entered Wrong password";
        $_SESSION['checkInfo']=$checkInfo;
        header('location: ../login.php');
    }
}
else{
    $_SESSION['Not_Found']="Your email is not exist";
    $_SESSION['checkInfo']=$checkInfo;
    header('Location: ../login.php');
}