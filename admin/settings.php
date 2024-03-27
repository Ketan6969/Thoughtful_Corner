<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="fonts.css" />
    <link rel="stylesheet" href="dashboardstyle.css"/>
    <link rel="stylesheet" href="css\all.min.css">
    <link rel="stylesheet" href="css\fontawesome.min.css">
    <!-- Fontawesome CDN Link 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />-->
  </head>
  <body>
    <nav class="sidebar">
      <a href="#" class="logo">Thoughtful Corner</a>

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
    <i class="fas fa-sign-out-alt"></i>
    <span><a href="\admin\login.php">Log Out</a></span>
  </div>
    </nav>

    <nav class="navbar">
      <i class="fa-solid fa-bars" id="sidebar-close"></i>
    </nav>

    <main class="main">
      <h1>Welcome to Settings page!</h1>
    </main> 
        
    <script src="script.js"></script>
  </body>
</html>