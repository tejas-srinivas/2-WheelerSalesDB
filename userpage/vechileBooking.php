<?php
  include ('../loginpage/connect.php');
  session_start();
  if(!isset($_SESSION['username'])) {
    header('location: login.html');
   } 
   $access='Access 125';
   $activa='Activa 6G';
   $jupiter='Jupiter 125';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CDN CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="user_details.css" rel="stylesheet" type="text/css">
    <link href="user_style.css" rel="stylesheet" type="text/css">
    <title>VECHILE BOOKING</title>
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
          <span class="sub-heading"><?php echo $_SESSION['first_name']; ?>
          <?php echo $_SESSION['last_name']; ?></<span>
        </div>
      </div>
    </header> 
    <div class="menu-bar">
      <div class="menu">
        <ul class="menu-links">
        <li class="nav-link">
            <a href="dashboard.php">
            <i class="fa-solid fa-motorcycle icon"></i>
              <span class="text nav-text">Vechile Enquiry</span>
            </a>
          </li>
          <li class="nav-link">
          <a href="user_details.php">
              <i class="fa-solid fa-user icon"></i>
              <span class="text nav-text">User Details</span>
            </a>
          </li>
          <li class="nav-link">
          <a href="vechileBooking.php" style="background-color: #f98e1d; color: white">
            <i class="fa-solid fa-cart-shopping icon"></i>
              <span class="text nav-text">Vechile Booking</span>
            </a>
          </li>
          <li class="nav-link">
          <a href="fittings.php">
            <i class="fa-solid fa-bars icon"></i>
              <span class="text nav-text">Fittings</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="#">
            <i class="fa-solid fa-money-bill icon"></i>
              <span class="text nav-text">Payment Details</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="updates_changes.php">
            <i class="fa-solid fa-wrench icon"></i>
              <span class="text nav-text">Updates/Changes</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="orderCancellation.php">
            <i class="fa-solid fa-ban icon"></i>
              <span class="text nav-text">Order Cancellation</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="logout.php">
            <i class="fa-solid fa-power-off icon"></i>
              <span class="text nav-text">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div> 
  </nav>  
  <section class="home">
      <div class="text"><h1 style="color:#000"><b>Vechile Booking</b></h1></div>
      <div class="border"></div>
      <br>
      <br>
      <div class="container">
        <form action="vechileBooking.php" method="post">
        <center><img src="../registerpage/logo.png" style="width: 450px; height: 150px; margin-top:-45px"></center>
        <center><h2 style="margin-top:-10px ;">Few Steps From Your Dream Ride ...</h2></center>
          <div class="row">
            <div class="col-25">
              <label for="fname">Email</label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="email" placeholder="Enter your email">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="fname">Phone Number</label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="ph_no" placeholder="Enter your Phone Number">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="model">Model</label>
            </div>
            <div class="col-75">
              <select id="model" name="model">
                <option value="#" disabled>Select Model</option>
                <option name="activa" value="Activa 6G">Activa 6G</option>
                <option name="access" value="Access 125">Access 125</option>
                <option name="jupiter" value="Jupiter 125">Jupiter 125</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="model">Location</label>
            </div>
            <div class="col-75">
              <select id="location" name="location">
                <option value="#" disabled>Select Location</option>
                <option value="Vijaynagar">Vijaynagar</option>
                <option value="Yelanka">Yelanka</option>
                <option value="Indranagar">Indranagar</option>
                <option value="Koramangla">Koramangla</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="model">Color</label>
            </div>
            <div class="col-75">
              <?php 
              if($access){
              echo '<select id="color" name="color">
                <option value="#" disabled>Select Color</option>
                <option value="White">White</option>
                <option value="Silver">Silver</option>
                <option value="Black">Black</option>
                <option value="Wine Red">Wine Red</option>
                <option value="Aqua Green">Aqua Green</option>
                </select>';
              }
              else if($activa){
                echo '<select id="color" name="color">
                <option value="#" disabled>Select Color</option>
                <option value="White">White</option>
                <option value="Silver">Silver</option>
                <option value="Black">Black</option>
                <option value="Red">Red</option>
                <option value="Yellow">Yellow</option>
                </select>';
              }
              else if($jupiter){
                echo '<select id="color" name="color">
                <option value="#" disabled>Select Color</option>
                <option value="White">White</option>
                <option value="Silver">Silver</option>
                <option value="Browm">Brown/option>
                <option value="Blue">Blue/option>
                <option value="Aqua Green">Aqua Green</option>
                </select>';
              }
              ?>
            </div>
          </div>
          
          <div class="button">
            <button type='submit' class="book-now" name="submit" value="Register" id="submit"><b>BOOK NOW</b></button>
            <button type='submit' class="back" name="submit" id="submit">
              <a href="../userpage/dashboard.php" style="text-decoration: none; color:white"><b>BACK</b></a></button>
          </div> 
      </div>
      </form>
    </div>
  </section>
  </body>
</html>