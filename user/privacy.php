<?php ob_start(); ?>
<?php
        session_start();
        include("conn.php");
        include("cardlogic.php");
    ?>


    <?php
    function rand_quote(){
        include("conn.php");
        $sql = "SELECT quote, author FROM quotes_mst ORDER BY RAND() LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        echo '<div class="quote-card">';
        echo '<p class="quote">"' . $row['quote'] . '"</p>';
        echo '<p class="author">- ' . $row['author'] . '</p>';
        echo '<br>';
        echo '</div>';
    
    }
    //rand_quote();
    ?>
       <?php
    if(isset($_POST['logout'])){
        session_destroy();
        echo "session Destroyed"; // This line may cause issues. Remove it or use it outside of the header function.
        header("location: login.php");
        exit();
    }
?>
<?php
    //Log in redirection code
    if(isset($_POST['login'])){
        header("location: login.php");
        exit();
    }
    //Sign up redirection code
    if(isset($_POST['signup'])){
        header("location: signup.php");
        exit();
        
    }

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!--  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
	    <link rel="stylesheet" href="css\fontawesome.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Quicksand:wght@300;400&display=swap" rel="stylesheet"> 
-->
    <script src="jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="css\fontawesome.min.css">
    <link rel="stylesheet" href="css\all.min.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="aboutus.css">
    
    <title>Privacy</title>
    </head>
    <body>
    <header>
            <nav>
                <div class="logo">
                    Thoughtful Corner
                </div>
                <div class="menu">
                <form action="index.php" method="post">
                    <ul class="menu-links">
                    <li class="dropdown">
        <i class="fa-solid fa-user usericon"></i>
        <div class="fa-user-dropdown">
            <form action="index.php" method="post">
            <?php
                if(isset($_SESSION['user_id'])){
                    $UserName = $_SESSION['user_name'];
                    echo '<p class="Usernametext">' . $UserName . '</p>';  
                    echo '<a class="userdd" href="likes.php">Liked Quotes</a>';
                    echo '<input class="submit" type="submit" value="Log out" name="logout">';
                    
                }
                else{
                        echo '<input class="submit" type="submit" value="Log in" name="login">';
                        echo '<input class="submit" type="submit" value="sign up" name="signup">';
                }
            ?>
            </form>
        </div>
    </li>
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            Categories
                            <div class="dropdown-options">
                                
                                <a href="motivation.php" class="catebtn">Motivation</a>
                                <a href="art.php" class="catebtn">Art</a>
                                <a href="love.php" class="catebtn">Love</a>
                                <a href="wisdome.php" class="catebtn">Wisdome</a>
                                <a href="friendship.php" class="catebtn">Friendship</a>
                                <a href="positivity.php" class="catebtn">Positivity</a>
                                <a href="life.php" class="catebtn">Life Lessons</a>
                                <a href="humor.php" class="catebtn">Humor</a>
                                <a href="time.php" class="catebtn">Time</a>
                                <a href="special.php" class="catebtn">Special</a>
                               
                                
                            </div>
                        </li>
                        
                        <li><a href="aboutus.php">About us</a></li>
                        <li><a href="randomquote.php">RandomQuotes</a></li>
                       
                    
                    </ul>
                    </form>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                
                <h3 class="about-heading">
                Privacy Policy
                </h3>
                <div class="text-container">
                <p class="about-intro">
                    <b>Effective Date: 13/02/2024</b><br>
                    At Thoughtful Corner, we value your privacy and are committed to protecting any information you share with us. This Privacy Policy outlines how we collect, use, disclose, and safeguard your personal information when you use our website.</p>    
                
                <h3 class="about-heading">
                Information We Collect
                </h3>
                <p class="about-content">
                <b>Personal Information:</b> When you register or interact with our website, we may collect personal information such as your name, email address, and other relevant details.<br><br>

                <b>Usage Data:</b> We may automatically collect information on how you interact with the website, including your IP address, browser type, and pages visited.
                </p>

                <h3 class="about-heading">
                How We Use Your Information
                </h3>
                <p class="about-content">
                <b>Providing Services:</b> We use your personal information to deliver the services you request, including displaying quotes, managing user accounts, and facilitating communication.<br><br>

                <b>Improving User Experience:</b> We analyze usage data to enhance our website's functionality, tailor content to user preferences, and optimize user experience.
                </p>

                <h3 class="about-heading">
                Information Sharing
                </h3>
                <p class="about-content">We do not sell, trade, or otherwise transfer your personal information to third parties without your consent. However, we may share aggregated, non-personally identifiable information for analytical and marketing purposes.
                </p>
                <h3 class="about-heading">
                Security
                </h3>
                <p class="about-content">
                We implement security measures to protect your personal information. However, no method of transmission over the internet or electronic storage is completely secure; therefore, we cannot guarantee absolute security.
                </p>
                <h3 class="about-heading">
                Cookies and Tracking Technologies
                </h3>
                <p class="about-content">
                We use cookies and similar technologies to enhance your experience on our website. You can manage your cookie preferences through your browser settings.   
                </p>
                <h3 class="about-heading">
                Changes to this Privacy Policy
                </h3>
                <p class="about-content">
                We may update this Privacy Policy to reflect changes in our practices or for legal compliance. We encourage you to review this page periodically for any updates. 
                </p>
                <h3 class="about-heading">
                Contact Us
                </h3>
                <p class="about-content">
                If you have questions or concerns regarding this Privacy Policy, please contact us at <b>solankiketan156@gmail.com</b>. 
                </p>
                
                <p class="about-content">
                By using Thoughtful Corner, you agree to the terms outlined in this Privacy Policy.
                </p>
                </div>
            </div>


        </main>
        <footer>
        <div class="footer-content">
            <p>&copy; 2024 Thoughtful Corner. All rights reserved.</p>
            <ul class="footer-links">
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="terms.php">Terms of Service</a></li>
                
            </ul>
        </div>
    </footer>
   </body>
    </html>

 
<?php ob_end_flush(); ?>
