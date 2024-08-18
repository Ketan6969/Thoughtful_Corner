<?php
    $hostname = "localhost:5000";
    // $dbname = "thcorner";
    $username = "root";
    $password = "Ketan@123";
    $conn = "";
    //establishing connection
    $conn = mysqli_connect($hostname,$username,$password);

    //checking connection
    if(!$conn)
    {
        echo "Connection Error ";
    }
    
   
?>