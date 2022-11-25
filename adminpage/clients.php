<?php
  include ('../adminpage/a_connect.php');
   session_start();
   if(!isset($_SESSION['a_name'])) {
    header('location: admin_login.html');
   } 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CDN CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    
    <link href="../adminpage/admin_style.css" rel="stylesheet" type="text/css">
    <title>Clients</title>
  </head>
  <body>
    <nav class="designer-slider">
    <header>
      <div class="logo-section">
        <span class="image">
          <img src="contact.png" alt="logo" style="width: 40px; height: 40px; margin:9px; margin-top:14px;">
        </span>
        <div class="text logo-text">
          <span class="heading"><h1>Welcome,</h1></span>
          <span class="sub-heading"><?php echo $_SESSION['a_name']; ?>
          </<span>
        </div>
      </div>
    </header> 
    <div class="menu-bar">
      <div class="menu">
        <ul class="menu-links">
        <li class="nav-link">
            <a href="../adminpage/clients.php">
            <i class="fa-solid fa-user icon"></i>
              <span class="text nav-text">Clients</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="#">
              <i class="fa-solid fa-bars icon"></i>
              <span class="text nav-text">Logs</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="#">
            <i class="fa-solid fa-wrench icon"></i>
              <span class="text nav-text">Updates/Changes</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/profile.php">
            <i class="fa-solid fa-user icon"></i>
              <span class="text nav-text">Profile</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/logout.php">
            <i class="fa-solid fa-power-off icon"></i>
              <span class="text nav-text">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div> 
  </nav>  
   <section class="home">
      <div class="text"><h1>Clients</h1></div>
      <div class="border"></div>
      <br>
        
   </section>
    
  </body>
</html>