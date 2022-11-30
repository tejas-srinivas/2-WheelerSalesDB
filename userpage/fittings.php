<?php
  include ('../loginpage/connect.php');
   session_start();
   if(!isset($_SESSION['username'])) {
    header('location: login.html');
   } 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="user_details.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="user_style.css" rel="stylesheet" type="text/css">
    <script src="dropdownChange.js"></script>
    <title>Accessories</title>
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
              <span class="text nav-text">User Verification</span>
            </a>
          </li>
          <li class="nav-link">
          <!-- <a href="vechileBooking.php"> -->
            <i class="fa-solid fa-cart-shopping icon"></i>
              <span class="text nav-text">Vechile Booking</span>
            </a>
          </li>
          <li class="nav-link">
          <a href="fittings.php" style="background-color: #f98e1d; color: white">
            <i class="fa-solid fa-bars icon"></i>
              <span class="text nav-text">Accessories</span>
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
            <a href="#">
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
      <div class="text"><h1 style="color:#000"><b>Moped-Accessories</b></h1></div>
      <div class="border"></div>
      <br>
      <br>
      <div class="container">
      <form action="fittings.php" method="POST">
        <center><img src="../registerpage/logo.png" style="width: 450px; height: 150px; margin-top:-45px"></center>
        <center><h2 style="margin-top:-10px ;">Select the Accessories you want to include.</h2></center>
          
          
          <div class="row">
            <div class="col-25">
              <label for="mirror">Mirrors</label>
            </div>
            <div class="col-75">
              <select id="mirror" name="mirror" >
                <option value="">Select Mirror</option>
                <option value="Chrome-Mirror">Chrome Mirrors</option>
                <option value="Plane-Mirror">Plane black</option>
              </select>
            </div>
          </div>
          
         
                
          <div class="row">
            <div class="col-25">
              <label for="model">Speedo-Meter</label>
            </div>
            <div class="col-75">
              <select id="varient" name="speedometer" required>
                <option value="">Select Varient</option>
                <option value="Analog">Analog Meter</option>
                <option value="Digital">Digital Meter</option>
              </select>
            </div>
          </div>
          
          <div class="row">
            <div class="col-25">
              <label for="location">Stand</label>
            </div>    
            <div class="col-75">  
              <select id="varient" name="stand" required>
                <option value="">Select Stand</option>
                <option value="W-Center-Stand">With Center-Stand</option>
                <option value="W/O-Center-Stand">W/O Center-Stand</option>
              </select>
          </div>
        </div>
  <div class="row">
            <div class="col-10">
              <label for="location">Select Mobile-Charger</label>
            
            <input class="checkbox4" style="margin-left:25px;"type="checkbox"  name="Charger" value="Charger"> Charger
            
              
          </div>
          
          <div class="button">
            <button type="submit" class="book-now" name="submit-fitting-details" value="submit-fitting-details" id="submit-fitting-details"><b>BUY NOW</b></button>
            <button type='button' class="back" name="back" id="back" style="margin-left: 170px;">
              <a href="../userpage/user_details.php" style="text-decoration: none; color:white;"><b>BACK</b></a></button>
          </div> 
        </div>
      </form>
    </div>
  </section>
  </body>
</html>

<?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit-fitting-details'])) {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'wheels&deals';
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if (mysqli_connect_error()) {
      exit('Error connecting to the database' . mysqli_connect_errno());
    }
    
    if(isset($_POST['mirror']) && isset($_POST['speedometer']) && isset($_POST['stand']) && isset($_POST['Charger'])) {
      $Mirror = $_POST['mirror'];
      $Speedo_meter = $_POST['speedometer'];
      $Stand = $_POST['stand'];
      $Charger = $_POST['Charger'];
      $fitting_no = rand(10000,12000);
      $fitting_id = "FWD-".($fitting_no) ;
      $u_id = $_SESSION['u_id'];
      $query = "SELECT booking_id FROM vechile_booking WHERE u_id='$u_id'";
      $resulti = mysqli_query($con,$query);
        if ($resulti) {
            $value = mysqli_fetch_array($resulti);
            $booking_id = $value['booking_id'];
        }
      if (isset($_POST['submit-fitting-details'])) {
        $sql ="INSERT INTO accessory(fitting_id,booking_id,u_id,Mirror,speedometer,stand,Charger) VALUES ('$fitting_id','$booking_id','$u_id','$Mirror','$Speedo_meter','$Stand','$Charger')";   //end-to-end password protection
        $result = mysqli_query($con,$sql);  
        if($result){
          echo "<script>alert('Your Accessories is added Successfully...');</script>";
          echo "<script>window.location.href='../userpage/payment_details.php'</script>";
        } 
      }
      else {
          echo 'Error Occured inserting into records';
        }  
    }
  }
?> 