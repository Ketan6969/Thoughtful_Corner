<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Page</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="fonts.css" />
    <link rel="stylesheet" href="dashboardstyle.css"/>
    <link rel="stylesheet" href="formstyle.css" />
    <!-- Fontawesome CDN Link 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />-->
    <link rel="stylesheet" href="css\all.min.css">
    <link rel="stylesheet" href="css\fontawesome.min.css">
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
      <form action="update.php" method="post" class="f1">
            <h2>Update Quote</h2><br>
            <input type="text" name="quote_id" id="quote_id" placeholder="Enter Quote Id" class="inputbox"><br>
            <input type="text" name="quote" placeholder="Quote" required class="inputbox"><br>
            <input type="text" name="author" placeholder="Author" required class="inputbox"><br>
            <input type="text" name="category" placeholder="Category" required class="inputbox"><br>
            <input type="submit" name="update" value="Update Quote" class="buttons">
        </form>
      </div>
        <!-- Logout Icon -->
  
    </main>
        
    <script src="script.js"></script>
  </body>
</html>

<?php
  include("conn.php");
 
  if(isset($_POST['update']))
  {
    global $conn;
    $quote_id = $_POST['quote_id'];
    $quote = $_POST['quote'];
    $author = $_POST['author'];
    $cate = $_POST['category'];
    $sql = "update quotes_mst set quote_id = '$quote_id' , quote = '$quote' , author = '$author' , cate = '$cate' where quote_id = '$quote_id'";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo '<script>alert("Data Updated!")</script>';
        $_SESSION['success_msg'] = "Data Updated!"; //Assigned Success Message
        header("location:" . $_SERVER['REQUEST_URI']); //Redirected page to self 
        exit();
    }  
    else{
      die('<script>alert("Error occured while Updating!")</script>');
    }
    mysqli_close($conn);
  }
 
  //Printing Session Variable
  if (isset($_SESSION['success_msg'])) {
    echo '<script>alert("' . $_SESSION["success_msg"] . '")</script>';
  
    unset($_SESSION['success_msg']);
}
?>