<!DOCTYPE html>
<html>
  
<head>
    <title></title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
    
        $conn = mysqli_connect("localhost", "root", "Ansh@2002", "ebooks");
          
        // Check connection
        if($conn === false)
        {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
          
        // Taking all values from the form data(input)
        $message =  $_REQUEST['message'];
          
        // Performing insert query execution
        // here our table name is new
        $sql = "INSERT INTO message VALUES ('$message')";
          
        if(mysqli_query($conn, $sql))
        {
            
        } else{
            echo "ERROR: Hush! Sorry!!! $sql. " 
                . mysqli_error($conn);
        }

          
        // Close connection
        mysqli_close($conn);
        
        echo "<script>window.location = 'http://localhost/homepg.html'</script>";

        ?>
        
    </center>
</body>
  
</html>