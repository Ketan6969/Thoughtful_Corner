<?php
session_start();
include("functions.php");
?>
<?php
 if(isset($_POST['logoutbtn'])){
  session_destroy();
 // This line may cause issues. Remove it or use it outside of the header function.
  header("location: login.php");
  exit();
}
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Index</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="fonts.css" />
    <link rel="stylesheet" href="dashboardstyle.css"/>
    <link rel="stylesheet" href="css\all.min.css">
    <link rel="stylesheet" href="css\fontawesome.min.css">

    
    <!-- Fontawesome CDN Link
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" /> -->

  </head>
  <body>
    <nav class="sidebar">
      <a href="index.php" class="logo">Thoughtful Corner</a>

      <div class="menu-content">
        <ul class="menu-items">
          <li class="item">
            <div class="menu-title">Dashboard</div>
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
    <div class="dashboard-components">
      <div class="r1">
      <div class="admin-msg">
        <h2>
          <?php    
            echo "<h3> Good " . greetTime() . "</h3>";
            echo '<h2>' . $_SESSION['adminname'] . '</h2>';
        ?>
        </h2>
      </div>
      <div class="count-dept">
      <div class="total-quotes">
        <?php
            quote_count();
        ?>
      </div>
      <div class="total-users">
            <?php
                user_count();
            ?>
      </div>
      </div>
      </div>
      <div class="r2">
       <!-- Reports -->
      <div class="cate-reports">
      <h2 class="cate-heading">Category Reports</h2>
      <table>
        <tr>
          <th>Category</th>
          <th>Total Quote</th>
        </tr>
        <?php
          cate_count("motivation");
          cate_count("special");
          cate_count("art");
          cate_count("wisdom");
          cate_count("love");
          cate_count("friendship");
          cate_count("life");
          cate_count("humor");
          cate_count("time");
          cate_count("positivity");
        ?>
      </table>
      </div>     
      </div>
      </div>
    </main>
    <script src="script.js"></script>
  </body>
</html>

