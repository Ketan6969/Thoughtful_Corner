<?php ob_start(); ?>
<?php
        include("conn.php");
        include("cardlogic.php");
        include("ranquote.php");

        session_start();
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
    <link rel="stylesheet" href="ranquotestyle.css">
       
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
   <div class="heading">
        <h2>Random Quotes</h2>
    </div>
    <form action="randomquote.php" method="post">  
    <div class="card">
        <?php
            if(isset($_POST['submit'])){
                ran_quote();
            }
            ?>
            <div class="button">
            <input type="submit" name="submit" class="submit" value="Generate">   
            </div>
    </div>
        
    </div>
    </form>
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
