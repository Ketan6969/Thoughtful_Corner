<?php ob_start(); ?>
    <?php
        
        session_start();
        include("conn.php");
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
    
        <link rel="stylesheet" href="style.css">
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
                                
                                <a h    ref="motivation.php" class="catebtn">Motivation</a>
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
            <div class="main">
            
                <div class="text-con">
            <h3 class="main-logo">Thoughtful Corner</h3>
            <p class="slogan">Nourishing Minds, Inspiring Hearts</p>
            <?php
                 if(!isset($_SESSION['user_id'])){
                        echo ' <form action="index.php" method="post">';
                        echo '<input class="submit" type="submit" value="Log in" name="login">';
                        echo '<input class = "submit" type="submit" value="sign up" name="signup">';
                        echo '</form>';
                 }
            ?>
            </div>
            </div>
            <div class="feat">
        <div class="opt">
            <h2>Unique Quotes</h2>
            <p>Discover a collection of one-of-a-kind quotes that will inspire and uplift your spirits.</p>
        </div>
        <div class="opt">
            <h2>Random Quote Generator</h2>
            <p>Get a dose of wisdom with our random quote generator. Click the button and be surprised!</p>
        </div>
        <div class="opt">
            <h2>Themed Quotes</h2>
            <p>Explore quotes organized by themes. Find the perfect words for every mood and occasion.</p>
        </div>
        
        <div class="opt">
            <h2>Special Collection</h2>
            <p>Explore quotes organized by themes. Find the perfect words for every mood and occasion.</p>
        </div>
       
        <div class="opt">
            <h2>Daily Doses of Wisdom</h2>
            <p>Subscribe to our newsletter and receive a daily dose of wisdom directly in your inbox. Let Thoughtful Corner be the gentle reminder you need to start your day on a positive note.</p>
        </div> 
        <div class="opt">
            <h2>Diverse Categories</h2>
            <p>Explore a rich tapestry of quotes categorized into themes such as love, motivation, success, happiness, and many more. We've meticulously curated content that speaks to the varied facets of the human experience.</p>
        </div>
    </div>

            <div class="random_quotes">
            <h3>
                Random Quotes
            </h3>
            <div class="quote-carousel">
            
            
                <?php
                    rand_quote();
                    rand_quote();
                    rand_quote();
                    rand_quote();
                    rand_quote();
                    rand_quote();
                ?>
                <?php
                if(!isset($_SESSION['user_id'])){
                    echo '<div class="quote-card">';
                    echo ' <form action="index.php" method="post">';
                    echo '<p>Log in for more</p>';
                    echo '<input type="submit" value="Sign Up" class="submit" name="signup">';
                    echo '<input type="submit" value="Log in" class="submit" name="login">';
                    echo '</form>';
                    echo '</div>';
                }
                else{
                    echo '<div class="quote-card">';
                    echo '<p>Go to categories to surf more</p>';
                    echo '</div>';
                }
                ?>
            
            
            
            </div>
            <button id="prevBtn">&#10094;</button>
            <button id="nextBtn">&#10095;</button>
            </div>
            
        </div>

            </div>
            <!-- Add more quote-cards as needed -->
        </div>
    </div>

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

    <script>
        
        $(document).ready(function() {
            var currentIndex = 0;
            var totalQuotes = 6;//$('.quote-card').length;

            $('#nextBtn').click(function() {
                showQuote(currentIndex + 1);
            });

            $('#prevBtn').click(function() {
                showQuote(currentIndex - 1);
            });

            function showQuote(index) {
                if (index >= 0 && index < totalQuotes) {
                    $('.quote-card').css('transform', 'translateX(' + (-index * 100) + '%)');
                    currentIndex = index;
                }
            }
        });

    </script>
    </body>
    </html>

<?php ob_end_flush(); ?>
