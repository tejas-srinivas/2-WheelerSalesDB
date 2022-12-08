<!-- <?php
  include ('../loginpage/connect.php');
  session_start();
  if(!isset($_SESSION['username'])) {
    header('location: login.html');
   } 
?>   -->


<!doctype html>
<html lang="en">
  <head>
     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="user_details.css" rel="stylesheet" type="text/css">
    <link href="user_style.css" rel="stylesheet" type="text/css">
    <script src="dropdownChange.js"></script>
    <title>Booking Confirmation</title>
  </head>
  <body>
    <div class="black-box">
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
            
            <i class="fa-solid fa-motorcycle icon"></i>
              <span class="text nav-text" disabled>Vehicle Enquiry</span>
            </a>
          </li>
          <li class="nav-link">
          
              <i class="fa-solid fa-user icon"></i>
              <span class="text nav-text" disabled>User Details</span>
            </a>
          </li>
          <li class="nav-link">
          
            <i class="fa-solid fa-cart-shopping icon"></i>
              <span class="text nav-text" disabled>Vehicle Booking</span>
            </a>
          </li>
          <li class="nav-link">
          
            <i class="fa-solid fa-bars icon"></i>
              <span class="text nav-text" disabled>Accessories</span>
            </a>
          </li>
          <li class="nav-link">
             <a href="#">
            <i class="fa-solid fa-money-bill icon"></i>
              <span class="text nav-text" disabled>Payment Details</span>
            </a>
          </li>
          <li class="nav-link">
            
            <i class="fa-solid fa-wrench icon"></i>
              <span class="text nav-text" disabled>Updates/Changes</span>
            </a>
          </li>
          <li class="nav-link">
            
            <i class="fa-solid fa-ban icon"></i>
              <span class="text nav-text" disabled>Order Cancellation</span>
            </a>
          </li>
          <li class="nav-link">
            
              <i class="fa-solid fa-user icon"></i>
              <span class="text nav-text">Profile</span>
            </a>
          </li>
          <li class="nav-link">
            
            <i class="fa-solid fa-power-off icon"></i>
              <span class="text nav-text" disabled>Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div> 
  </nav>  
  <section class="home">
     
  </section>
  </div> 
 <div class="confirm-message">
 <img src="../homepage/logo.png" style="width:300px; height:100px;">
   <h3 class="space">Thank you for connecting with us.<br>
                     Your Vechile has been booked successfully and it is under processing.
                     We have recieved your contact details, Our executives will contact you shortly regarding the product delivery 
                     date and time. 
                     <br>
                     <br>
                     Regards,
                     <br>
                     <span style="color:#f98e1d;">Wheels and Deals</span>
                     <br>
                     <br>
                     <span>Booking Id: <?php echo $_SESSION['booking_id']; ?> </span>
                      <br>
                      <br>
   
   <button type='button' class="ok" style="
    background: #f98e1d;   
    padding: 4px 20px;
    position:relative;
    border-radius:7px;
    border-color:#f98e1d;
    margin-left:290px;
    margin-top: -15px;
    cursor:pointer;">
      <a href="../userpage/fittings.php" style="text-decoration:none; 
    color:white;font-size:18px;
    font-weight:bold;
    text-align:center;"><b>OK</b></a>
   </button>
   </h3>
  </div>
  
  </body>
</html>

<?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit-vechile-details'])) {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'wheels&deals';
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if (mysqli_connect_error()) {
      exit('Error connecting to the database' . mysqli_connect_errno());
    }
    
    if(isset($_POST['email_']) && isset($_POST['ph_no']) && isset($_POST['model']) && isset($_POST['location_']) && isset($_POST['color']) && isset($_POST['varient'])) {
      $email_ = $_POST['email_'];
      $ph_no = "+91-".$_POST['ph_no'];
      $model = $_POST['model'];
      $location_ = $_POST['location_'];
      $color = $_POST['color'];
      $varient = $_POST['varient'];
      $u_id = $_SESSION['u_id'];
      $booking_no = rand(100000,120000);
      $booking_id = "WD-".($booking_no) ;
      if(isset($_POST['model']))
      {
      if($_POST['model'] == 'Activa-6G'){
        $vechile_id = 1;
      }
      elseif($_POST['model'] == 'Access-125'){
        $vechile_id = 2;
      }
      elseif($_POST['model'] == 'Jupiter-125'){
        $vechile_id = 3;
      }
    }
      if (isset($_POST['submit-vechile-details'])) {
        $sql ="INSERT INTO vechile_booking(booking_id,u_id,email_,ph_no,vechile_id,model,location_,color,varient) VALUES ('$booking_id','$u_id','$email_','$ph_no','$vechile_id','$model','$location_','$color','$varient')";   //end-to-end password protection
        $result = mysqli_query($con,$sql);  
        if ($result) {
          $query = "SELECT * FROM vechile_booking WHERE booking_id='$booking_id'";
          $resulti = mysqli_query($con,$query);
          if ($resulti) {
              $value = mysqli_fetch_array($resulti);
              $_SESSION['booking_id'] = $value['booking_id'];
          }
          echo "<script>alert('Your Vechile is booked Successfully...');</script>";
          echo "<script>window.location.href='../userpage/confirm_message.php'</script>";
          echo $_SESSION['booking_id'];
        } 
      }
      else {
          echo 'Error Occured inserting into records';
        }  
    }
  }    
?> 