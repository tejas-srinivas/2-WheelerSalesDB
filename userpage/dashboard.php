<?php
include('../loginpage/connect.php');
session_start();
if (!isset($_SESSION['username'])) {
  header('location: login.html');
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
  <link href="user_style.css" rel="stylesheet" type="text/css">
  <title>VEHICAL ENQUIRY</title>
</head>

<body>
  <nav class="designer-slider">
    <header>
      <div class="logo-section">
        <span class="image">
          <img src="contact.png" alt="logo" style="width: 40px; height: 40px; margin:9px; margin-top:14px;">
        </span>
        <div class="text logo-text">
          <span class="heading">
            <h1>Welcome,</h1>
          </span>
          <span class="sub-heading"><?php echo $_SESSION['first_name']; ?>
            <?php echo $_SESSION['last_name']; ?></<span>
        </div>
      </div>
    </header>
    <div class="menu-bar">
      <div class="menu">
        <ul class="menu-links">
          <li class="nav-link">
            <a href="dashboard.php" style="background-color: #f98e1d; color: white">
              <i class="fa-solid fa-motorcycle icon"></i>
              <span class="text nav-text">Vechile Enquiry</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="user_details.php">
              <i class="fa-solid fa-user icon"></i>
              <span class="text nav-text">User Verification</span>
            </a>
          </li>
          <li class="nav-link">
            <!-- <a href="#"> -->
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
            <a href="payment_details.php">
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
    <div class="text">
      <h1 style="color:#000"><b>Vechile Enquiry</b></h1>
    </div>
    <div class="border"></div>
    <br>
    <div class="act">
      <img class="img1" src="activa6g.png" href="#" width="300px" height="250px ">
      </img>
      <div class="activadetails">

        <h1 class="axtiva" style="color:#f98e1d"><u>ACTIVA 6G</u></h1>
        <h3 class="paragraph1">The Honda Activa is a motor scooter made by Honda Motorcycle and Scooter India (HMSI). It was launched in India in May 2000. Production in Mexico began in 2004.</h3>
        </br>

        <a href="../userpage/vehicledetails/activa.html" class="click1">click here for further details</a>


      </div>

    </div>
    </br>
    <!-- <div class="border1"></div> -->
    </br>
    <div class="act">
      <img class="img2" src="access (2).png" href="#" width="500px" height="300px ">
      </img>
      <div class="accessdetails">

        <h1 class="access" style="color:#f98e1d"><u>ACCESS 125</u></h1>
        <h3 class="paragraph2">The Suzuki Access 125 is a scooter produced by the Japanese motorcycle company Suzuki through its Indian subsidiary. It was introduced on September 18, 2007.</h3>
        </br>

        <a href="../userpage/accessdetails/access.html" class="click1">click here for further details</a>


      </div>

    </div>
    </br>
    <!-- <div class="border2"></div> -->
    </br>
    <div class="act">
      <img class="img3" src="jupiter125.png" href="#" width="500px" height="300px ">
      </img>
      <div class="jupiterdetails">

        <h1 class="jupiter" style="color:#f98e1d"><u>JUPITER 125</u></h1>
        <h3 class="paragraph3">TVS Jupiter is a variomatic scooter launched in September 2013 by India's TVS Motor Company. ... On 7th October 2021, TVS Launched the 125cc Variant of Jupiter in order to compete TVS Ntorq, Honda Activa 125 and Suzuki Access 125. and uses an all new 124.8 cc engine.</h3>
        </br>
        <a href="../userpage/jupiterdetails/jupiter.html" class="click1">click here for further details</a>
      </div>
    </div>
    </br>
    </br>
    <!-- <div class="border3"></div> -->
  </section>
</body>

</html>