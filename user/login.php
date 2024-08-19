<?php
    ob_start();
    session_start();
?>
<?php
include("conn.php");
// Turn off display of warnings
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 'Off');



if (isset($_POST["login"])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Check if the entered email exists in the database
    $check_email_query = "SELECT * FROM user_mst WHERE email = '$email'";
    $check_email_result = mysqli_query($conn, $check_email_query);

    if (mysqli_num_rows($check_email_result) > 0) {
        // Email exists, proceed with login
        $sql = "SELECT * FROM user_mst WHERE email = '$email' AND pass = '$pass'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $user_id = $row['user_id'];
        $user_name = $row['name'];

        if (empty($email) || empty($pass)) {
            echo '<script>alert("Please fill all the details!")</script>';
        } elseif ($count > 0) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_name'] = $user_name;
            header("location: index.php");
            exit();
        } else {
            echo '<script>alert("Incorrect Email or Password!")</script>';
        }
    } else {
        echo '<script>alert("Email not registered. Please sign up!")</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="fonts.css">
    <title>Log In</title>
</head>
<body>  
    <div class="container">
        <div class="img-container">
            <h1>Thoughtful Corner</h1>
        </div>
        <form action="login.php" method="post" class="form-container">
            <h2>Log in</h2>
            <input class="text" type="text" name="email" id="username" placeholder="Email">
            <input class="text" type="password" name="pass" id="pass" placeholder="Password">
            <input class="submit" type="submit" value="Log in" name="login">
            <p>Not a user? <a href="signup.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>
<?php
    ob_end_flush();
?>