<?php
session_start();
include('dbcon.php');


if(isset($_POST['adduser']))
{
    $uname = $_POST['username'];
    $email = $_POST['email_id'];
    $pwd = $_POST['passwordsignup'];

    // $user_query = "INSERT INTO sign_up (username,email_id,passwordsignup,role,Membership,booksread) VALUES ('$uname','$email','$pwd',"User","Classic","0")";
    $user_query = "INSERT INTO sign_up (username,email_id,passwordsignup,role,Membership) VALUES ('$uname','$email','$pwd','User','Classic')";
    $user_query_run = mysqli_query($conn, $user_query);

    if($user_query_run)
    {

        header("Location: ./login.php");
    }
    else
    {

        header("Location: ./login.php");
    }
}
?>