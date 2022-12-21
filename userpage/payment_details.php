<?php
  include ('../loginpage/connect.php');
   session_start();
   if(!isset($_SESSION['username'])) {
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

$u_id = $_SESSION['u_id'];
$road_tax = 10500;
$insurance = 2500;
$accessory_price = 4325;

$query = "SELECT * FROM vechile_booking WHERE u_id='$u_id'";
$result = mysqli_query($con,$query);
if($result) {
  $row = mysqli_fetch_array($result);
  $booking_id = $row['booking_id'];
  $vechile_id = $row['vechile_id'];
  $model = $row['model'];
  $color = $row['color'];
  $varient = $row['varient'];
  $location = $row['location_'];

  $counter = 1;
  while($counter < 4){
    if($row['vechile_id'] == $counter){
      $query = "SELECT ex_showroom FROM stock_price where vechile_id='$counter'";
      $resulti = mysqli_query($con,$query);
      if($resulti){
      $row = mysqli_fetch_assoc($resulti);
      $ex_showroom = $row['ex_showroom'];
      settype($ex_showroom,"integer"); 
      break; 
     }
    }
    else {
      $counter++;
    }
  }
  
}
$d=strtotime("+1 Week");
$delv_date = date("Y-m-d", $d) ;
$total_bill = $road_tax + $insurance + $accessory_price + $ex_showroom."/-";
if(isset($_POST['pay'])){
  $query = "INSERT INTO bills(booking_id,delv_date,location_,color,model,varient,ex_showroom,accessory_price,road_tax,insurance,total_price) VALUES ('$booking_id','$delv_date','$location','$color','$model','$varient','$ex_showroom','$accessory_price','$road_tax','$insurance','$total_bill')";
  $result = mysqli_query($con,$query);
  if($result){
    echo "<script>alert('Payment recieved Successfully...');</script>";
    echo "<script>window.location.href='../userpage/dashboard.php'</script>";
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
    <title>Payment Details</title>
  </head>
  <style>
    table, th, td {
      border:0.5px solid black;
      border-collapse:collapse;
      font-size: larger;
      padding: 10px 77px 10px;
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
          <!-- <a href="user_details.php"> -->
              <i class="fa-solid fa-user icon"></i>
              <span class="text nav-text">User Verification</span>
            </a>
          </li>
          <li class="nav-link">
          <!-- <a href="vechileBooking.php"> -->
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
            <a href="payment_details.php" style="background-color: #f98e1d; color: white">
            <i class="fa-solid fa-money-bill icon"></i>
              <span class="text nav-text">Payment Details</span>
            </a>
          </li>
          <li class="nav-link">
            <!-- <a href="updates_changes.php"> -->
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
              <span class="text nav-text">Log out</span>
            </a>
          </li>
        </ul>
      </div>
    </div> 
  </nav>
  <section class="home">
    <div class="text">
      <h1 style="color:#000"><b>Payment Details</b></h1>
    </div>
    <div class="border"></div>
    <br>
  <div class="container" style="border-radius: 15px;
    background-color: #f2f3f7;
    padding: 10px 77px 10px ;
    box-shadow: 5px 5px 10px black;margin-left:15rem;margin-top:2.5rem;">
    <img src="../homepage/logo.png" style="width:240px; margin-top: -5px; height:80px;margin-left:11rem;">
  <table>
  <tr>
    <th>Details</th>
    <th>Price</th>
  </tr>
  <br>
  <tr>
    <td>Ex-Showroom</td>
    <td><b>₹ <?php echo $ex_showroom; ?></b></td>
  </tr>
  <tr>
    <td>Accessories</td>
    <td><b>₹ <?php echo $accessory_price; ?></b></td>
  </tr>
  <tr>
    <td>Road Tax</td>
    <td><b>₹ <?php echo $road_tax; ?></b></td>
  </tr>
  <tr>
    <td>Insurance</td>
    <td><b>₹ <?php echo $insurance; ?></b></td>
  </tr>
  <tr>
    <td>Delivery Date</td>
    <td><b style="font-size:28px"><?php echo $delv_date; ?></b></td>
  </tr>
  </table>
      <br>
    <div class="total-bill" style="margin-left:20rem;">
      <div class="bord" style="border:0.5px solid black;width:15rem;"></div>
      <h1 style="margin-left:1rem;"><b> Total Bill : ₹ <?php echo $total_bill; ?></b></h1>
      <div class="bord" style="border:0.5px solid black;width:15rem;"></div>
    </div>
  </div>
  <br>
  <form action="payment_details.php" method="post">
    <button type='submit' class="button" name="pay" value="pay" id="pay" style="border-radius: 8px;margin-left: 250px;background-color:#f98e1d;color:#f2f3f7;border:0.5px solid #f98e1d;width:100px;height:40px;margin-left:35rem;"><b>Pay Now</b></button>
  </form>
  </body>
</html>