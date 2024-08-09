<?php
session_start();
include('config/dbcon.php');

if(isset($_POST['addmem']))
{
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $membership = $_POST['membership'];
    $role = $_POST['role'];

    $user_query = "INSERT INTO sign_up (username,email_id,passwordsignup,membership,role) VALUES ('$uname','$email','$pwd','$membership','$role')";
    $user_query_run = mysqli_query($con, $user_query);

    if($user_query_run)
    {
        $_SESSION['status']="User Added Successfully";
        header("Location: usmem.php");
    }
    else
    {
        $_SESSION['status'] = "User registration failed";
        header("Location: usmem.php");
    }
}   