<?php

$host = "localhost";
$username = "root";
$password = "Ansh@2002";
$dbname = "ebooks";

//connection
$con = mysqli_connect("$host","$username","$password","$dbname");

//check connection
if(!$con)
{
    header("Location: ../errors/db.php");
    die();
}
else{
    echo "Database Connected.!";
}
?>