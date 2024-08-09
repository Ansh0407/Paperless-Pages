<?php
session_start();
include('config/dbcon.php');

if(isset($_POST['addebook']))
{
    $bookid = $_POST['bookid'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $rating = $_POST['rating'];
    $isbn = $_POST['isbn'];
    $language = $_POST['language'];
    $year = $_POST['publication_year'];
    $price = $_POST['price'];

    $user_query = "INSERT INTO ebooks (bookid,title,author,genre,rating,isbn,language,publication_year,prices) VALUES ('$bookid','$title','$author','$genre','$rating','$isbn','$language','$year','$price')";
    $user_query_run = mysqli_query($con, $user_query);

    if($user_query_run)
    {
        $_SESSION['status']="eBook Added Successfully";
        header("Location: ebooks.php");
    }
    else
    {
        $_SESSION['status'] = "eBook Adding failed";
        header("Location: ebooks.php");
    }
}   

if(isset($_POST['updatebook']))
{
    $bookid = $_POST['bookid'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $rating = $_POST['rating'];
    $isbn = $_POST['isbn'];
    $language = $_POST['language'];
    $year = $_POST['publiyear'];
    $price = $_POST['price'];

    //$user_query = "INSERT INTO ebooks (bookid,title,author,genre,rating,isbn,language,publi_year,prices) VALUES ('$bookid','$title','$author','$genre','$rating','$isbn','$language','$year','$price')";
    $user_query = "UPDATE ebooks SET title='$title', author='$author', genre='$genre', rating='$rating', isbn='$isbn', language='$language', publi_year='$year', prices='$price'  WHERE bookid='$bookid'";
    $user_query_run = mysqli_query($con, $user_query);

    if($user_query_run)
    {
        $_SESSION['status']="eBook updated Successfully";
        header("Location: ebooks.php");
    }
    else
    {
        $_SESSION['status'] = "eBook Adding failed";
        header("Location: ebooks.php");
    }



}