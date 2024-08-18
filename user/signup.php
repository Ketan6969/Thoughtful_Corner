<?php
    include("conn.php");
    session_start();
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
        <form action="signup.php" method="post" class="form-container">
            <h2>Sign Up</h2>
            <input class="text" type="text" name="name" id="name" placeholder="Name" required>
            <input class="text" type="email" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
            <input class="text" type="password" name="pass" id="pass" placeholder="Password" required>
            <input class="text" type="password" name="repass" id="repass" placeholder="Confirm Password" required>
            <input class="submit" type="submit" value="Sign Up" name="signup">
            <p>Already a user? <a href="login.php">Log in</a></p>
        </form>
    </div>
</body>
</html>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $repass = $_POST["repass"];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Invalid email format!")</script>';
    } elseif ($name == null || $email == null || $pass == null || $repass == null) {
        echo '<script>alert("Please fill all the details!")</script>';
    } elseif ($pass != $repass) {
        echo '<script>alert("Passwords do not match!")</script>';
    } elseif (strlen($pass) < 8) {
        echo '<script>alert("Password should be at least 8 characters long!")</script>';
    } else {
        // Check if email is already in use
        $check_email_query = "SELECT * FROM user_mst WHERE email = '$email'";
        $check_email_result = mysqli_query($conn, $check_email_query);

        if (mysqli_num_rows($check_email_result) > 0) {
            echo '<script>alert("Email is already in use. Please choose a different one.")</script>';
        } else {
            // Insert new user into the database
            $sql = "INSERT INTO user_mst (name,email,pass) VALUES ('$name' , '$email' , '$pass')";
            mysqli_query($conn, $sql);
            echo '<script>alert("Signup successful!")</script>';
            mysqli_close($conn);
            $_SESSION['success_msg'] = "signup successful";
            header("location:" . $_SERVER['REQUEST_URI']);
            exit(); 
        }
    }
}

if (isset($_SESSION['success_msg'])) {
    echo '<script>alert("' . $_SESSION["success_msg"] . '")</script>';
    unset($_SESSION['success_msg']);
}
?>
