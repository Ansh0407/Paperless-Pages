<?php
session_start();
include('authentication.php');
include('config/dbcon.php');

if(isset($_POST['logout']))
{
    session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);

    $_SESSION['status'] = "Logged out successfully";
    header('Location: login.php');
    exit(0);
}
if(isset($_POST['adduser']))
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
        header("Location: registeredu.php");
    }
    else
    {
        $_SESSION['status'] = "User registration failed";
        header("Location: registeredu.php");
    }
}   

if(isset($_POST['deleteuser']))
{
    $uname = $_POST['username'];

    $query = "DELETE FROM sign_up WHERE username = '$uname' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "user deleted succesfully";
        header("Location: registeredu.php");
    }
    else
    {
        $_SESSION['status'] = "user deleted failed";
        header("Location: registeredu.php");

    }
}