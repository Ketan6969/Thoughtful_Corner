<?php
        
        session_start();
        include("conn.php");
        include("cardlogic.php");

    
        
    ?>

    

    <?php
    
        function quote_byid($id){
        global $conn;
        $sql = "select * from quotes_mst where quote_id = '$id'";
        $result = mysqli_query($conn,$sql);
        $quotes = mysqli_fetch_all($result,MYSQLI_ASSOC);
        if($quotes){
            //use foreach loop
            foreach ($quotes as $quote) {
                echo '<div class="quote-card">';
                echo '<p class="quote" data-quote-id="' . $quote['quote_id'] . '">' . $quote['quote'] . '</p>';
                echo '<p class="author">- ' . $quote['author'] . '</p>';
                echo '<br>';
                echo '<button class="like-icon" data-quote-id="' . $quote['quote_id'] . '"><i class="fa-regular fa-heart like-icon"></i></button>';
                echo '</div>';
            }

        }
       
    }

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
    <link rel="stylesheet" href="body.css">
    
    <title>Likes Page</title>
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
            <div class="main">
            
            <div class="container">
        <div class="heading">
                <h2 class="heading-text">Liked Quotes</h2>
            </div>
            <form action="quote.php" method="post">  
                <div class="card">
                    
                <?php
                    $uid = $_SESSION['user_id'];
                    $sqlQUOTE = "select quote_id from like_mst where user_id = $uid";
                    $result = mysqli_query($conn,$sqlQUOTE);
                    $ids = mysqli_fetch_all($result,MYSQLI_ASSOC);
                    
                    //using the fetch quote function
                    
                    if(!empty($ids)) {
                        // Use foreach loop to iterate through each quote ID
                        foreach ($ids as $id){
                            // Call the quote_byid function for each quote ID
                            quote_byid($id['quote_id']);
                            echo '<br>';
                        }
                    } else {
                        echo "No liked quotes found.";
                    }
                    
                        
                  
                   
                ?>
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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".like-icon").click(function() {
                    $(this).toggleClass('fa-solid fa-regular');
                });
                $(".bookmark-icon").click(function() {
                    $(this).toggleClass('fa-solid fa-regular');
                });
            });
        </script> 

<script>
    $(document).ready(function () {
        $(".like-icon").click(function (e) {
            e.preventDefault(); // Prevent the default form submission or anchor link behavior

            var quoteId = $(this).data("quote-id");

            // Check if quoteId is defined and not empty
            if (quoteId !== undefined && quoteId !== "") {
                $.ajax({
                    type: "POST",
                    url: "like_quote.php",
                    data: { quote_id: quoteId },
                    success: function(response) {
                        // Check the response and update the like icon accordingly
                        if (response === "liked") {
                            $(`.like-icon[data-quote-id=${quoteId}]`).toggleClass('fa-regular fa-solid');
                            alert("Quote liked!");
                        } else if (response === "unliked") {
                            $(`.like-icon[data-quote-id=${quoteId}]`).toggleClass('fa-solid fa-regular');
                            alert("Quote unliked!");
                        } else {
                            alert("Error: " + response);
                        }
                    },
                   error: function(xhr, status, error) {
                        console.error(xhr.responseText); // Log any error messages to the console
                    }
                });
            } /*else {
                alert("Error: Quote Id is undefined or empty");
            }*/
        });
    });
</script>
    </body>
    </html>

 