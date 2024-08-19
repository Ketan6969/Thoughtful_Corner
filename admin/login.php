<?php
    session_start();
?>

<?php
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 'Off');
    include("conn.php");
    include("functions.php");
    
    if(isset($_POST["submit"]))
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM admin_mst WHERE a_email = '$email' AND a_pass = '$pass'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $adminname = $row['a_name'];

        if(empty($email) || empty($pass))
        {
            echo '<script>alert("Please fill all the details!")</script>';
        }
        elseif($count > 0)
        {
            $_SESSION['adminname'] = $adminname;
            header("location: index.php");
        }
        else{
            echo '<script>alert("Incorrect Email or Password!")</script>';
        }
        
    } 
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" type="text/css" href="fonts.css">  
<link rel="stylesheet" href="css\all.min.css">
<link rel="stylesheet" href="css\fontawesome.min.css">
<!--<link rel="preconnect" href="https://fonts.googleapis.com">  
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Quicksand:wght@300;400&display=swap" rel="stylesheet"> 
-->
<title>log in</title>
</head>
<body>
        <h1>Thoughtful Corner</h1>
<div class="container">
<form action="login.php" method="POST">
    <div class="menus">
    <h2>Admin Log In</h2>
    
    <input type="text" name="email" id="email" placeholder="Email" required><br>
    <input type="password" name="pass" id="pass" placeholder="Password" required><br>
    
    </div>
    <div class="buttons">
    <input type="submit" value="Sign in" name="submit" class="submit">
    <p>Don't have an account?<a href="signup.php"> sign up</a> </p>
    </div>
</form>
</div>
</body>
</html>
