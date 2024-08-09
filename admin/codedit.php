<?php
session_start();
include('config/dbcon.php');

if(isset($_POST['adduser']))
{
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $membership = $_POST['Membership'];
    $role = $_POST['role'];

    $user_query = "INSERT INTO sign_up (username,email_id,passwordsignup,Membership,role) VALUES ('$uname','$email','$pwd','$membership','$role');";
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

if(isset($_POST['updateuser']))
{
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $membership = $_POST['Membership'];
    $role = $_POST['role'];

    
   // $query = "UPDATE sign_up SET username = '$uname', email_id = '$email', passwordsignup = '$_pwd', membership = '$_membership', role = '$_role' where username = '$_uname' ";
    $query = "UPDATE sign_up SET username='$uname', email_id='$email', passwordsignup='$pwd', Membership='$membership', role='$role' WHERE username='$uname'";
    
    $user_query_run = mysqli_query($con, $query);

    if($user_query_run)
    {
        $_SESSION['status'] = "user updated success";
        header("Location: registeredu.php");
    }
    else
    {
        $_SESSION['status'] = "user update failed";
        header("Location: registeredu.php");

    }



}


?>