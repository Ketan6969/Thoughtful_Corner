<?php
  session_start();
?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Reports</title>
      <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="fonts.css" />
      <link rel="stylesheet" href="dashboardstyle.css"/>
      <link rel="stylesheet" href="reports.css"/>
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

          <li class="menu-title">
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
        <h2 class="Heading">User Reports</h2>
      <div class="user-info">
          <?php
              include("conn.php");
              
              $sql = "SELECT * FROM user_mst";
              $result = mysqli_query($conn, $sql);
              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      echo '<div class="info-card">';
                      echo '<table>';
                      echo '<th><label>UserId</label><br>' . $row["user_id"] . "</th><th><label>Username</label><br>" . $row["name"] . "</th><th><label>Email</label><br>" . $row["email"] .'</th></table><button class="info-cardbtn" onclick="toggleDropdown(this)">Liked Quotes<br><i class="fa-solid fa-angle-down icon"></i></button></th>' . " <br>"; 
                      echo '';
                      // Query for retrieving quote details based on user_id
                      $user_id = $row["user_id"];
                      $q1 = "SELECT quote_id, like_id FROM like_mst WHERE user_id = '$user_id'";
                      $result1 = mysqli_query($conn, $q1);
                      
                      if($result1->num_rows < 1){
                          echo '<div class="more-info">';
                          echo '<p>No Liked Quotes</p>';
                          echo '</div>';
                      } else {
                          echo '<div class="more-info">';
                          while($row1 = $result1->fetch_assoc()) {
                              $quote_id = $row1["quote_id"];
                              $q2 = "SELECT * FROM quotes_mst WHERE quote_id = '$quote_id'";
                              $result2 = mysqli_query($conn, $q2);
                              while ($row3 = mysqli_fetch_assoc($result2)) {
                                  echo '<div class="more-infocard">';
                                  echo '<h4 class="info-heading">Quote</h4>';
                                  echo '<p class="info-content">' . $row3['quote'] . '</p>';                  
                                  echo '<h4 class="info-heading">Author</h4>';
                                  echo '<p class="info-content">' . $row3['author'] . '</p>';
                                  echo '<h4 class="info-heading">Category</h4>';                  
                                  echo '<p class="info-content">' . $row3['cate'] . '</p>';                  
                                  echo '</div>';
                              }
                          }
                          echo '</div>';
                      }
                    
                      echo '</div>';  
                  }
              } else {
                  echo "0 results";
              }
          ?>
      </div>

      <script>
          function toggleDropdown(button) {
              var moreInfo = button.parentNode.querySelector('.more-info');
              moreInfo.classList.toggle('show-more-info');
          }
           // Select all icons by class name
    var icons = document.querySelectorAll(".icon");

// Add event listener to each icon
icons.forEach(icon => {
    icon.addEventListener("click", () => {
        icon.classList.toggle("rotate");
    });
});
      </script>
      <script src="script.js"></script>
      </main>
          
      
    </body>
  </html>