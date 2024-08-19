<?php ob_start(); ?>
<?php
  session_start();
  include("functions.php");
?>  
<?php
    include("conn.php");
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
            $quote = $_POST["quote"];
            $author = $_POST["author"];
            $cate  = $_POST["category"];
            
            $sql = "insert into quotes_mst (quote,author,cate) values ('$quote' , '$author' , '$cate')";
            if($quote == NULL || $author == NULL || $cate == NULL)
            {
                echo '<script>alert("Please fill all the details!")</script>';
            }   
            else
            {
                $result = mysqli_query($conn,$sql);
                if($result){
                echo '<script>alert("Data Inserted!")</script>';
                $_SESSION['success_msg'] = "Data inserted!";
                header("location:" . $_SERVER['REQUEST_URI']); 
                exit();
            }
            else{
                die('<script>alert("Error occured while insertion!")</script>');
            }
            }
            mysqli_close($conn);     
    }
    if (isset($_SESSION['success_msg'])) {
      echo '<script>alert("' . $_SESSION["success_msg"] . '")</script>';
    
      unset($_SESSION['success_msg']);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="fonts.css" />
    <link rel="stylesheet" type="text/css" href="formstyle.css" />
    <link rel="stylesheet" href="css\all.min.css">
    <link rel="stylesheet" href="css\fontawesome.min.css">
    
    
    <!-- Fontawesome CDN Link 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />-->
  </head>
  <body>
  <nav class="sidebar">
      <a href="index.php" class="logo">Thoughtful Corner</a>

      <div class="menu-content">
        <ul class="menu-items">
          <li class="item">
          <a href="index.php">Dashboard</a>
          </li>

          <li class="item">
            <div class="submenu-item">
              <span>Manage Quotes</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                back
              </div>
              <li class="item">
                <a href="insert.php">Insert Quote</a>
              </li>
              <li class="item">
                <a href="update.php">Update Quote</a>
              </li>
              <li class="item">
                <a href="delete.php">Delete Quote</a>
              </li>
              <li class="item">
                <a href="viewquote.php">View Quotes</a>
              </li>
            </ul>
          </li>

          <li class="item">
            <a href="reports.php">User Reports</a>
          </li>

          

          
        </ul>
      </div>
    <!-- Logout Icon -->
  <div class="logout-icon">
    <form action="" method="post">
    <span><i class="fas fa-sign-out-alt"></i> <input type="submit" value="Log Out" name="logoutbtn" class="logoutbtn"></span>
</form>
  </div>
  
    </nav>
    <nav class="navbar">
    <i class="fa-solid fa-bars" id="sidebar-close"></i>  
    </nav>

    <main class="main">
      <div class="forms">
      <form action="insert.php" method="post" class="f1">
            <h2>Add New Quote</h2><br>
            <input type="text" name="quote" placeholder="Quote" class="inputbox" required><br>
            <input type="text" name="author" placeholder="Author" class="inputbox" required><br>
            <input type="text" name="category" placeholder="Category" class="inputbox" required><br>
            <input type="submit" name="insert" value="Add Quote" class="buttons">
        </form>
      </div>
    </main>
        
    <script src="script.js"></script>
  </body>
</html>


<?php ob_end_flush(); ?>
