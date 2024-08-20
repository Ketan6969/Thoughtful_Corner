<?php ob_start(); ?>
<?php
    $hostname = "db";          // The hostname of the MySQL service in Docker Compose
    $username = "root";        // MySQL root username
    $password = "Ketan123";   // MySQL root password
    $dbname = "thcorner";      // The name of your database
    
    //establishing connection
    $conn = mysqli_connect($hostname,$username,$password,$dbname);

    //checking connection
    if(!$conn)
    {
        die("Connection Error");
    }
    
   
?>
<?php ob_end_flush(); ?>
