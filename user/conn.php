<?php
    $hostname = "localhost";
    $servername = "thcorner";
    $username = "root";
    $password = "";
    $conn = "";
    //establishing connection
    $conn = mysqli_connect($hostname,$username,$password,$servername);

    //checking connection
    if(!$conn)
    {
        echo "Connection Error ";
    }
    
   
?>