<?php
include('../loginpage/connect.php');
session_start();
if (!isset($_SESSION['username'])) {
  header('location:../loginpage/login.html');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit-user-details'])) {
  $DATABASE_HOST = 'localhost';
  $DATABASE_USER = 'root';
  $DATABASE_PASS = '';
  $DATABASE_NAME = 'wheels&deals';
  $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
  if (mysqli_connect_error()) {
    exit('Error connecting to the database' . mysqli_connect_errno());
  }
  if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['aadhar_no']) && isset($_POST['driving_license'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $aadhar_no = $_POST['aadhar_no'];
    $driving_license = $_POST['driving_license'];
    if (isset($_POST['submit-user-details'])) {
      $stmt = $con->prepare('INSERT INTO user_verification(firstname,lastname,aadhar_no,driving_license) VALUES (?,?,?,?)');   //end-to-end password protection
      $stmt->bind_param('ssss', $firstname, $lastname, $aadhar_no, $driving_license);  //s=string ,i=integer
      $stmt->execute(); //executes the function
      if ($stmt) {
        echo "<script>window.location.href='../userpage/vechileBooking.php'</script>";
      } else {
        echo 'Error Occured inserting into records';
      }
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
  <link href="user_details.css" rel="stylesheet" type="text/css">
  <link href="../userpage/user_style.css" rel="stylesheet" type="text/css">
  <title>User Verification</title>
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
            <a href="user_details.php" style="background-color: #f98e1d; color: white">
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
              <span class="text nav-text">Fittings</span>
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
      <h1 style="color:#000"><b>User Verification</b></h1>
    </div>
    <div class="border"></div>
    <br>
    <br>
    <div class="container">
      <form action="user_details.php" method="post">
        <center><img src="../registerpage/logo.png" style="width: 450px; height: 150px; margin-top:-45px"></center>
        <center>
          <h2 style="margin-top:-10px ;">Provide Your Details for User Veriication ...</h2>
        </center>
        <div class="row">
          <div class="col-25">
            <label for="fname">First Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="firstname" value="<?php echo $_SESSION['first_name']; ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="fname">Last Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="last_name" name="lastname" value="<?php echo $_SESSION['last_name']; ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="lname">Aadhar Number</label>
          </div>
          <div class="col-75">
            <input type="text" id="aadhar" name="aadhar_no" placeholder="Enter aadhar no. (eg: 1234-5678-9101)" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="lname">Driving License Number</label>
          </div>
          <div class="col-75">
            <input type="text" id="license" name="driving_license" placeholder="Enter DL no. (eg: KA01-202012345)" required>
          </div>
          <div class="button">
            <button type='submit' class="book-now" name="submit-user-details" value="book-now" id="submit-user-details">
              <b>CONFIRM NOW</b>
            </button>
            <button type='button' class="back" name="back">
              <a href="../userpage/dashboard.php" style="text-decoration: none; color:white">
                <b>BACK</b>
              </a>
            </button>
          </div>
        </div>
      </form>
    </div>
  </section>
</body>

</html>