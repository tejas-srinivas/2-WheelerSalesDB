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
    <title>Dashboard</title>
  </head>
  <style>
    section{
      background:url(../background_img/background6.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      width:1268px;
    }
    .cont{
        background: #f2f3f7;
        box-shadow: 5px 5px 10px rgb(28 28 28);
        padding: 9px 44px 105px;
        border-radius: 20px;
        width: 280px;
        margin-left: 4rem;
        align-items: center;
        font-size: small;
    }
  </style>
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
            <a href="../adminpage/a_dashboard.php" style="background-color: #f98e1d; color: white">
            <i class="fa-solid fa-chart-line icon"></i>
              <span class="text nav-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/clients.php">
            <i class="fa-solid fa-users icon"></i>
              <span class="text nav-text">Clients</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/logs.php">
              <i class="fa-solid fa-motorcycle icon"></i>
              <span class="text nav-text">Logs</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/Testride_users.php">
              <i class="fa-solid fa-road icon"></i>
              <span class="text nav-text">Test-Ride Clients</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/UserInfo.php">
              <i class="fa-solid fa-bars icon"></i>
              <span class="text nav-text">Users Info</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/stock_price.php">
            <i class="fa-solid fa-money-bill icon"></i>
              <span class="text nav-text">Availability/Price</span>
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
      <div class="text" style="color:white"><h1>Dashboard</h1></div>
      <div class="border" style="border: 0.5px solid white ;"></div>
      <br>
      <div class="main" style="display: flex;justify-content: center;">
        <div class="cont">
            <h1 style="font-size:x-large"> TOTAL USERS </h1>
        </div>
        
        <div class="cont">
            <h1 style="font-size:x-large"> TOTAL BOOKINGS </h1>
        </div>
        
        <div class="cont">
            <h1 style="font-size:x-large"> TEST RIDES </h1>
        </div>
      </div> 
      <br>
      
      <div class="main" style="display: flex;justify-content: center;">
        <div class="cont">
            <h1 style="font-size:x-large"> BILLS GENERATED </h1>
        </div>

        <div class="cont">
            <h1 style="font-size:x-large"> TOTAL REVENUE </h1>
        </div>

        <div class="cont">
            <h1 style="font-size:x-large"> REVENUE PER BRANCH </h1>
        </div>
      </div>
      <br>
      
      <div class="main" style="display: flex;justify-content: center;">
        <div class="cont">
            <h1 style="font-size:x-large"> ACTIVA SALES </h1>
        </div>

        <div class="cont">
            <h1 style="font-size:x-large"> ACCESS SALES </h1>
        </div>

        <div class="cont">
            <h1 style="font-size:x-large"> JUPITER SALES </h1>
        </div>
      </div>
  </section> 
  </body>
</html>