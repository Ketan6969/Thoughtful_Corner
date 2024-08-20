<?php ob_start(); ?>
<?php
$hostname = "db";          // The hostname of the MySQL service in Docker Compose
$username = "root";        // MySQL root username
$password = "Ketan123";   // MySQL root password
$dbname = "thcorner";      // The name of your database

// Establishing connection
$conn= mysqli_connect($hostname, $username, $password, $dbname);

// Checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>

<?php ob_end_flush(); ?>
<!-- Test -->