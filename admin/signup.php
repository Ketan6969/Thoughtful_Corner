<?php
session_start();
?>

<?php

include("conn.php");
include("functions.php");


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $email = test_input($_POST["email"]);
    $pass = $_POST["pass"];
    $repass = $_POST["repass"];
    $sql = "INSERT INTO admin_mst (a_name,a_email,a_pass) VALUES ('$name' , '$email' , '$pass')";
    if($name == null || $email == null || $pass == null || $repass == null)
    {
        echo '<script> alert("Please fill all the details!") </script>';
    }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo '<script>alert("Invalid Email Format")</script>';
    }
    elseif(!checkPasswordStrength($pass)){
        echo '<script>alert("Password should have at least 1 special character,uppercase,lowercase,numbers and minimum 8 chars!")</script>';
    }
    elseif($pass != $repass)
    {   
        echo '<script>alert("Passwords Do not match!")</script>';
    }
    else{
        mysqli_query($conn,$sql);
        echo '<script>alert("")</script>';
        mysqli_close($conn);
        $_SESSION['success_msg'] = "signup successful";
        header("location:" . $_SERVER['REQUEST_URI']);
        exit();
    }
}

if (isset($_SESSION['success_msg'])) {
    echo '<script>alert("' . $_SESSION["success_msg"] . '")</script>';

    unset($_SESSION['success_msg']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=z, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="fonts.css">

    <link rel="stylesheet" href="css\all.min.css">
<link rel="stylesheet" href="css\fontawesome.min.css">
<!--<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Quicksand:wght@300;400&display=swap" rel="stylesheet"> --> 
   
<title>Sign Up</title>
</head>
<body>
    <h1>Thoughtful Corner</h1>

<div class="container">
<form action="signup.php" method="POST">
    <div class="menus">
    <h2>Admin Sign Up</h2>
   
    <input type="text" name="name" id="firstname" placeholder="Name"><br>
    <input type="text" name="email" id="email" placeholder="Email"><br>
    <input type="password" name="pass" id="pass" placeholder="Password"><br>
    <input type="password" name="repass" id="repass" placeholder="Re-enter Password"></br>
    </div>
    <div class="buttons">
    <input type="submit" value="Sign up" class="submit">
    <p>Already have an account?<a href="login.php"> Log in</a> </p>
    </div>
</form>
</div>
</body>
</html>


