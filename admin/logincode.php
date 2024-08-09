<?php
session_start();
include('config/dbcon.php');

if(isset($_POST['submit']))
{
    $email = $_POST['email_id'];
    $password = $_POST['passwordsignup'];

    $log_query = "SELECT * FROM sign_up WHERE email_id='$email' AND passwordsignup='$password' AND role = 'Admin' limit 1";
    $log_query_run = mysqli_query($con, $log_query);

    if(mysqli_num_rows($log_query_run) > 0)
    {
        foreach($log_query_run as $row){
            $user_name = $row['username'];
            $user_email = $row['email_id'];
            $user_mem = $row['Membership'];
            $user_role = $row['role'];
        }
    $_SESSION['auth'] = true;
    $_SESSION['auth_user'] = [
        'user_name' =>$user_name, 
        'user_email' =>$user_email,
        'user_mem' =>$user_mem,
        'user_role' =>$user_role 
    ];

    $_SESSION['status'] = "Logged in Successfully";
    header('Location: index.php');
    }
    else
    {
    $_SESSION['status'] = "Invalid Email or password";
    header('Location: login.php');
    }
}
else
{
    $_SESSION['status'] = "access denied";
    header('Location: login.php');

}

?>

<!--?php
session_start();
include('config/dbcon.php');


// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//     }
//     echo "\nConnected successfully";

if(isset($_POST['submit'])){

    $uname= $_POST['username'];
    $email = $_POST['email_id'];
    $pword = $_POST['passwordsignup'];

    $sql= "SELECT username, passwordsignup FROM sign_up WHERE email_id='$email' AND passwordsignup='$pword' limit 1";
    $sql_run = mysqli_query($con, $sql);


    if($sql_run -> num_rows == 1)
    {
        foreach($log_query_run as $row){
            $uname = $row['username'];
            $email = $row['email_id'];
        }
            $_SESSION['auth'] = true;
            $_SESSION['auth_user'] = [
                'username' =>$uname, 
                'email_id' =>$email 
            ];
        $_SESSION['status'] = "Logged in Successfully";
        header('Location: index.php');
    }

    else
    {
    $_SESSION['status'] = "Invalid Email or password";
    header('Location: login.php');
        // REDIRECTION TO HOME PAGE TO COME HERE
        exit();
    }

}
else{
    $_SESSION['status'] = "access denied";
    header('Location: login.php');
    // REDIRECTION TO LOGIN PAGE AGAIN.
    exit();
}

?-->