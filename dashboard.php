<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment | Paperless</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Saira&display=swap" rel="stylesheet">

</head>
<script type="text/javascript">
    function preventBack() {
        window.history.forward(); 
    }
    setTimeout("preventBack()", 0);
    window.onunload = function () { null };
</script>
<?php

$servername = "localhost";
$username = "root";
$password = "Ansh@2002";
$dbname = "ebooks";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
echo "\nConnected successfully";

$sql = "select * from curuser";
$result = $conn -> query($sql);

if($result -> num_rows == 0){
    header("Location: http://localhost/ebook/login.php");
}

else if($result -> num_rows >0){

    if(isset($_POST['submit'])){

        $sql = "delete from curuser";
        if ($conn->query($sql) === TRUE) {
            $msg = "Logged out!";
            echo "<script> alert('$msg') </script>";
            header("Location: http://localhost/ebook/showcase.php");
        } 
        else {
            $msg = "Unsuccessful Log Out!";
            echo "<script> alert('$msg') </script>";
            
        }
        
    }

}   

?>

<style>

    *{
        margin:0;
        padding: 0;
        font-family: 'Luxurious Roman', cursive;
    }

    body{
            background : url(fdfg.png); 
            background-repeat: no-repeat;
            background-size: 100%;

                   
    }

    .paymentpane{
        position:absolute; 
        width: 100vh;
        height: 900px;
        left: 1000px;
        padding: 0; 
        margin:10px;
        background: 422b18;
        opacity: 1;
        box-shadow: 0px 15px 8px rgba(0, 0, 0, 0.4);
        border-radius: 100px;
    }

    .pane{
     display: inline-block;
     justify-content: center;
     margin-top: 35vh;
     width: 70vh;
     height: 50vh;
     margin-left: 15vh;
     padding-top: 10px;   
     opacity: 1;   
      background: rgba(100, 69, 69, 0.9  1);    
     box-shadow: 0px 15px 8px rgb(0 0 0 / 40%);
     border-radius: 100px;
} 

    .backbtn{
        position: absolute;
        width: 45px;
        height: 45px;
        left: 20vh;
        top: 73vh;
        transition: 0.7s;

        background: #C4C4C4;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 100px;
        text-align: center;
    }

    .backbtn:hover{
        background-color: #928484;
    }

    .dashboardimg{
        position: absolute;
        width: 500px;
        height: 400px;
        margin-left: 20vh;
        align-self: center;
        top: -85px;

        background: url(./grl.png);
    }

    .title{
        position: absolute;
        width: 400px;
        height: 51px;
        left: 35vh;
        top: 45vh;
        font-family: 'Lora';
        font-style: normal;
        font-weight: 400;
        font-size: 40px;
        line-height: 51px;

        color: #FFFFFF;
    }

    .name{
         position: absolute;
         display : flex;
         height: 49px;
         left: 40vh;
         top: 38vh;
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 400;
         font-size: 40px;
         line-height: 49px;

        color: #FFFFFF;
    }

    .booksread{
        display : flex;
        justify-content: center;
        align-items: center;    
        margin-top : 20vh;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 200;
        font-size: 40px;
        line-height: 49px;

        color: #FFFFFF;
    }

    .memstat{
        display : flex;
        justify-content: center;
        align-items: center;    
        margin-top : 2vh;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;
        font-size: 40px;
        line-height: 49px;

        color: #FFFFFF;
    }

    .proceedbtn{
        display : flex;
        justify-content: center;
        align-items: center;    
        margin-left : 20vh;
        margin-top: 5vh;
        width : 25vh;
        transition: 0.7s;
        background: #C4C4C4;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 50px;
    }   

    .proceedbtn:hover{
        background-color: #928484;
    }

</style>

<body>

    <?php

    $curuserq = "select * from curuser";
    $curuserr = $conn -> query($curuserq);

    if($curuserr -> num_rows>0){
        $row = $curuserr -> fetch_assoc();
    }

    $tempuname = $row["username"];
    $signupq = "select * from sign_up where username ='" .$tempuname. "'";
    $signupr = $conn -> query($signupq);

    if($signupr -> num_rows>0){
        $row2 = $signupr -> fetch_assoc();
    }

    ?>

    <div class="paymentpane">

        <div class="backbtn">
            <button type="button" id="backbtn" style="background-color: transparent;border: 0px;color: #C14F4F;font-family: 'Montserrat';font-style: normal;font-weight: 600;font-size: 30px;width: 28px;height: 59px;left: 87px;top: 700px;text-align: center;align-items: center;" onclick="javascript:location='./browse.php'"><</button>
        </div>

        <div class="dashboardimg"></div>

        <div class="title">
            <?php
            if($row2["booksread"] <= 10){
                echo "Beginner Reader";
            }
            else if($row2["booksread"] > 10 && $row2["booksread"] <= 15){
                echo "Intermediate Reader";
            }
            else if($row2["booksread"] > 15){
                echo "Voracious Reader";
            }
            ?>
        </div>
        <div class="pane">
          <div class="name">
            <?php
            echo $row["username"];
            ?>
           </div>

           <div class="booksread">
            <?php
            echo $row2["booksread"] . " books read";
            ?>
           </div>

            <div class="memstat">
            <!-- Premium Member -->
             <?php
             if($row2["Membership"] == "yes"){   
                echo "Premium Member";
              }
             else{
                echo "Classic Member";
             }
             ?>
             </div>
        
        



        <form id="logout" class ="logout" method="post">

        <div class="proceedbtn">
            <button type="submit" name="submit" id="proceedbtn" style="width: 229px;height: 48px;left: 209px;top: 643px;background: transparent;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;border: 0px;font-family: 'Saira';font-style: normal;font-weight: 400;font-size: 24px;line-height: 38px;color: #C14F4F;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" required onclick="logoutfun()">Log Out</button>
        </div>

        </form>
        </div>

    </div>



</body>




</html>