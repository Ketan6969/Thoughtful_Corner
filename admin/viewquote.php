<?php ob_start(); ?>
<?php
  include("functions.php");
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Quotes</title>

    <link rel="stylesheet" href="style.css"> 
     <link rel="stylesheet" href="viewquote.css">
     <link rel="stylesheet" href="fonts.css">
    <!-- Fontawesome CDN Link
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" /> -->
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
      
    <div class="tab">
    <form action="lol.php" method="post">
        <div class="table-container">
            <table>
                <tr>
                    <th>Quote ID</th>
                    <th>Quote</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Delete</th>
                </tr>
                <?php
                    global $conn;
                    $sel = "select * from quotes_mst";
                    $result = mysqli_query($conn,$sel);
                    
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        echo '<tr>';
                        echo '<td>' . $row['quote_id'] . '</td>';
                        echo '<td>' . $row['quote'] . '</td>';
                        echo '<td>' . $row['author'] . '</td>';
                        echo '<td>' . $row['cate'] . '</td>';
                        echo '<td>' . '<input type="checkbox" name="selectedrolls[]" value="' . $row['quote_id'] . '">' . "</td>";
                        echo '</tr>';
                    }
                ?>
            </table>
        </div>
        <br>
        
        <input class="delete-btn" type="submit" value="delete" name="delete"><br>
        
      </form>
    </div>
    </main>
        
    <script src="script.js"></script>
  </body>
</html>


<?php ob_end_flush(); ?>
