<?php
include('../loginpage/connect.php');
session_start();
if (!isset($_SESSION['username'])) {
  header('location: login.html');
}
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'wheels&deals';
        $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
        if (mysqli_connect_error()) {
          exit('Error connecting to the database' . mysqli_connect_errno());
        }
        $booking_id = $_POST['booking_id'];
        $u_id = $_SESSION['u_id'];
        if(isset($_POST['check-details'])){
            $booking_id = $_POST['booking_id'];
            $query = "SELECT * FROM vechile_booking where booking_id='$booking_id'";
            $result = mysqli_query($con,$query);
            if($result) {
                $row = mysqli_fetch_assoc($result);
                $booking_id = $row['booking_id'];
                $ph_no = $row['ph_no'];
                $location_ = $row['location_'];
                $varient = $row['varient'];
                $color = $row['color'];
                $model = $row['model'];
            }
            else{
              echo 'error';
            }
          }
        elseif(isset($_POST['cancel'])){
            $query1 = "DELETE FROM vechile_booking WHERE booking_id = '$booking_id'" ;
            $result1 = mysqli_query($con,$query1);
            $query2 = "DELETE FROM accessory WHERE booking_id = '$booking_id'" ;
            $result2 = mysqli_query($con,$query2);
            $query3 = "DELETE FROM bills WHERE booking_id = '$booking_id'" ;
            $result3 = mysqli_query($con,$query3);
            $query4 = "DELETE FROM user_verification WHERE u_id= '$u_id'";
            $result4= mysqli_query($con,$query4);

            if($result1){
              echo "<script>alert('Your Booking is Cancelled');</script>";
              echo "<script>window.location.href='../userpage/dashboard.php'</script>";
              }
            }
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
  <title>Order Cancellation</title>
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
            <a href="dashboard.php">
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
            <!-- <a href="../userpage/vechileBooking.php"> -->
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
            <!-- <a href="payment_details.php"> -->
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
            <a href="orderCancellation.php" style="background-color: #f98e1d; color: #ffff">
              <i class="fa-solid fa-ban icon"></i>
              <span class="text nav-text">Order Cancellation</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../userpage/profile.php">
              <i class="fa-solid fa-user icon"></i>
              <span class="text nav-text">Profile</span>
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
      <h1 style="color:#000"><b>Order Cancellation</b></h1>
    </div>
    <div class="border"></div>
    <br>
    <form action="orderCancellation.php" method="post">
    <div class="control" style="margin-left: 5rem;">
    <div class="name">
        <label for="booking_id" style="font-size:20px;"><b>Enter Booking No :<b></label>
    </div>
    <div class="input">
        <input type="text" id="booking_id" name="booking_id" placeholder="Enter Booking_ID" style="border-radius: 6px; width: 400px;height: 40px;border:1px solid gray;box-sizing:border-box;padding: 10px 15px;font-size:16px;" required>
    </div>
    </div>
    <div class="button">
            <button type='submit' class="update" name="check-details" value="check-details" id="update" style="background-color: #f98e1d;
  color: white;padding: 10px 20px;margin: 8px 0;border: none;cursor: pointer;
  border-radius:8px;
  margin-left:5rem;">
              <b>Check</b>
            </button>
            <button name="cancel" style="background-color: #f98e1d;
        color: white;padding: 10px 20px;margin: 8px 0;border: none;cursor: pointer;border-radius:8px;text-decoration:none;"><b>Cancel Booking</b>
      </button>
    </div>
    </form>
    <br>
    <br> 
    
    <div class="display" style="margin-left:6rem;">
      <h1 style="font-size:10 px;">FIRST NAME: <?php if(isset($booking_id)){ echo $_SESSION['first_name'];} else { echo ' ';}  ?> </h1>
      <br>
      <h1 style="font-size:10 px;">LAST NAME: <?php if(isset($booking_id)){ echo $_SESSION['last_name'];} else { echo ' ';}  ?> </h1>
      <br>
      <h1 style="font-size:10 px;">BOOKING ID: <?php if(isset($booking_id)){ echo $booking_id; } else { echo ' ';} ?> </h1> 
      <br>
      <h1 style="font-size:10 px;">MODEL: <?php if(isset($booking_id)){ echo $model; } else { echo ' ';} ?> </h1>
      <br>
      <h1 style="font-size:10 px;">COLOR: <?php if(isset($booking_id)){ echo $color; } else { echo ' ';} ?> </h1>
      <br>
      <h1 style="font-size:10 px;">VARIENT: <?php if(isset($booking_id)){ echo $varient; } else { echo ' ';} ?> </h1>
      <br>
      <h1 style="font-size:10 px;">LOCATION: <?php if(isset($booking_id)){ echo $location_; } else { echo ' ';} ?> </h1>
      <br>
      
      

    </div> 
    
  </section>
</body>
</html>

