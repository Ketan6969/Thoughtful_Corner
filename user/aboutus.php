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
        exit();
    }
?>
<?php
    //Log in redirection code
    if(isset($_POST['login'])){
        header("location: login.php");
exit();
        exit();
    }
    //Sign up redirection code
    if(isset($_POST['signup'])){
        header("location: signup.php");
exit();
        exit();
        
    }

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Quicksand:wght@300;400&display=swap" rel="stylesheet"> 
-->
    <script src="jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="css\fontawesome.min.css">
    <link rel="stylesheet" href="css\all.min.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="aboutus.css">
        <title>Index Page</title>
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
                About Us
                </h3>
                <div class="text-container">
                <p class="about-intro">Hello and welcome to Thoughtful Corner – a space where inspiration meets introspection. I'm Ketan Solanki, the curator and enthusiast behind this haven of wisdom and quotes.</p>    
                <p class="about-content">I've always been captivated by the profound impact words can have on our lives. It's incredible how a well-crafted sentence or a simple phrase can resonate with us, offering comfort, motivation, or a fresh perspective. As a lover of language and a seeker of inspiration, I founded Thoughtful Corner to share this passion with you.</p>
                
                <h3 class="about-heading">
                The journey
                </h3>
                <p class="about-content">
                My journey with quotes began as a personal quest for moments of reflection and motivation. Over time, I realized that the beauty of these words was meant to be shared. Thoughtful Corner is the culmination of this realization – a place where I curate and present quotes that have touched my heart and sparked my imagination.
                </p>

                <h3 class="about-heading">
                Why Thoughtful Corner?
                </h3>
                <p class="about-content">
                This platform is not just a collection of quotes; it's a reflection of my commitment to fostering a community that appreciates the profound impact of words. Whether you're navigating the complexities of life, seeking motivation, or simply looking for a moment of solace, Thoughtful Corner is here for you.
                </p>

                <h3 class="about-heading">
                My Commitment
                </h3>
                <p class="about-content">
                I am dedicated to curating content that resonates with the diverse facets of the human experience. The categories are carefully chosen to cater to a wide range of interests and emotions. Every quote on this platform is handpicked, with the intention of inspiring and uplifting those who encounter it.
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
