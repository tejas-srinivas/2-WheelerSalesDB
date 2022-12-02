<?php
include('../loginpage/connect.php');
session_start();
if (!isset($_SESSION['username'])) {
  header('location: login.html');
}
?>

<?php
  $DATABASE_HOST = 'localhost';
  $DATABASE_USER = 'root';
  $DATABASE_PASS = '';
  $DATABASE_NAME = 'wheels&deals';
  $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
  if (mysqli_connect_error()) {
    exit('Error connecting to the database' . mysqli_connect_errno());
  }
  $query = $query = "SELECT available,ex_showroom FROM stock_price where vechile_id=1";
  $resulti = mysqli_query($con,$query);
  if($resulti){
    $rows = mysqli_fetch_array($resulti);
    $available = $rows['available'];
    $ex_showrrom = $rows['ex_showroom'];
  }
  $query = $query = "SELECT available,ex_showroom FROM stock_price where vechile_id=2";
  $resulti = mysqli_query($con,$query);
  if($resulti){
    $rows = mysqli_fetch_array($resulti);
    $available1 = $rows['available'];
    $ex_showrrom1 = $rows['ex_showroom'];
  }
  $query = $query = "SELECT available,ex_showroom FROM stock_price where vechile_id=3";
  $resulti = mysqli_query($con,$query);
  if($resulti){
    $rows = mysqli_fetch_array($resulti);
    $available2 = $rows['available'];
    $ex_showrrom2 = $rows['ex_showroom'];
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
  <title>VEHICLE ENQUIRY</title>
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
              <span class="text nav-text">Vehicle Enquiry</span>
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
              <span class="text nav-text">Vehicle Booking</span>
            </a>
          </li>
          <li class="nav-link">
            <!-- <a href="fittings.php"> -->
              <i class="fa-solid fa-bars icon"></i>
              <span class="text nav-text">Accessories</span>
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
      <h1 style="color:#000"><b>Vehicle Enquiry</b></h1>
    </div>
    <div class="border"></div>
    <br>
    <div class="act">
      <img class="img1" src="activa6g.png" href="#" width="300px" height="250px ">
      </img>
      <div class="activadetails">
        <h1 class="axtiva" style="color:#f98e1d" style="margin-top: -10px;">ACTIVA 6G :</h1>
        <h3 class="paragraph1">The Honda Activa is a motor scooter made by Honda Motorcycle and Scooter India (HMSI). It was launched in India in May 2000. Production in Mexico began in 2004.</h3>
        <h1 class="paragraph1" style="color:black">Ex-showroom : ₹<?php echo $ex_showrrom; ?></h1>  
      </br>
        <h1 style="margin-top: -20px;margin-left:-150px;">Vechile Availability :<?php echo $available; ?></h1>
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
        <h1 class="access" style="color:#f98e1d;margin-top:-40px;">ACCESS 125 :</h1>
        <h3 class="paragraph2">The Suzuki Access 125 is a scooter produced by the Japanese motorcycle company Suzuki through its Indian subsidiary. It was introduced on September 18, 2007.</h3>
        <h1 class="paragraph1" style="color:black">Ex-showroom : ₹<?php echo $ex_showrrom1; ?></h1>  
      </br>
        <h1 style="margin-top: -50px;margin-left:-100px;">Vechile Availability :<?php echo $available1; ?></h1>
        <br>

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

        <h1 class="jupiter" style="color:#f98e1d">JUPITER 125 :</h1>
        <h3 class="paragraph3">TVS Jupiter is a variomatic scooter launched in September 2013 by India's TVS Motor Company. ... On 7th October 2021, TVS Launched the 125cc Variant of Jupiter in order to compete TVS Ntorq, Honda Activa 125 and Suzuki Access 125. and uses an all new 124.8 cc engine.</h3>
        <h1 class="paragraph1" style="color:black">Ex-showroom : ₹<?php echo $ex_showrrom2; ?></h1>  
      </br>
        <h1 style="margin-top: -50px;margin-left:-100px;">Vechile Availability :<?php echo $available2; ?></h1>
        <br>
        <a href="../userpage/jupiterdetails/jupiter.html" class="click1">click here for further details</a>
      </div>
    </div>
    </br>
    </br>
    <!-- <div class="border3"></div> -->
  </section>
</body>

</html>