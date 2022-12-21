<?php
include('../loginpage/connect.php');
session_start();
if (!isset($_SESSION['username'])) {
  header('location: login.html');
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'wheels&deals';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {
exit('Error connecting to the database' . mysqli_connect_error());
}

if (isset($_SESSION['u_id'])) {

$u_id = $_SESSION['u_id'];
$query1 = "SELECT * FROM vechile_booking WHERE u_id = '$u_id'";
$result1 = mysqli_query($con, $query1);
if ($result1) {
  $row = mysqli_fetch_array($result1);
  $book_id = $row['booking_id'];
  $vec = $row['vechile_id'];
  $model = $row['model'];
  $color = $row['color'];
  $varient = $row['varient'];
  $location = $row['location_'];
  $query2 = "SELECT delv_date FROM bills WHERE booking_id = '$book_id'";
  $result2 = mysqli_query($con,$query2);
  if($result2){
    $row = mysqli_fetch_assoc($result2);
    $delv_date = $row['delv_date']; 
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
  <script src="dropdownChange.js"></script>
  <title>Updates / Changes</title>
</head>
<style>
   input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    resize: vertical;
    margin-left: 20px;
  }
  
  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
    margin-left: -40px;
  }
  
  .book-now {
    background-color: #f98e1d;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    float: right;
    margin-top :10px;
    margin-left: 20px;
    font-size: 18px;
  }
  .back {
    background-color: #f98e1d;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    margin-top :10px;
    margin-left: 40px;
    font-size: 18px;
  }
  
  .book-now:hover {
    background-color: #a85a0c;
  }

  .back:hover {
    background-color: #a85a0c;
  }
  
  .container1 {
    border-radius: 10px;
    background-color: #f2f3f7;
    padding: 40px 90px ;
    box-shadow: 5px 5px 10px #999;
    margin-left: 17rem;
  }
  
  .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
  }
  
  .col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
  }
  
  /* Clear floats after the columns */
  .row1:after {
    content: "";
    display: table;
    clear: both;
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
            <!-- <a href="#"> -->
              <i class="fa-solid fa-money-bill icon"></i>
              <span class="text nav-text">Payment Details</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="updates_changes.php" style="background-color: #f98e1d; color: white">
              <i class="fa-solid fa-wrench icon"></i>
              <span class="text nav-text">Updates/Changes</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../userpage/orderCancellation.php">
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
      <h1 style="color:#000"><b>Make Booking Changes</b></h1>
    </div>
    <div class="border"></div>
    <br>
    <div class="container1">
      <form action="updates_changes.php" method="post">
        <center><img src="../registerpage/logo.png" style="width: 450px; height: 150px; margin-top:-45px"></center>
        <center>
          <h2 style="margin-top:-10px ;">Booking Changes : <?php echo $book_id; ?></h2>
        </center>
        <div class="row1">
          <div class="col-25">
            <label for="fname">MODEL</label>
          </div>
          <div class="col-75">
          <img class="img" src="../userpage/Access-125.png" id="img" width="350px" height="250px ">
          <select id="model" name="model" onchange="dropdownChange(this.id,'color');" required>
                <option value="<?php echo $model; ?>"><?php echo $model; ?></option>
                <option value="">------</option>
                <option name="activa" value="Activa-6G">Activa 6G</option>
                <option name="access" value="Access-125">Access 125</option>
                <option name="jupiter" value="Jupiter-125">Jupiter 125</option>
              </select>
          </div>
        </div>
        <div class="row1">
          <div class="col-25">
            <label for="fname">COLOUR</label>
          </div>
          <div class="col-75">
          <select id="color" name="color" required> 
                <option value="<?php echo $color ?>"><?php echo $color; ?></option>
                <option value="">------</option>
              </select>
          </div>
        </div>
        <div class="row1">
          <div class="col-25">
            <label for="lname">VARIENT</label>
          </div>
          <div class="col-75">
          <select id="varient" name="varient" required>
                <option value="<?php echo $varient ?>"><?php echo $varient; ?></option>
                <option value="">------</option>
                <option value="DRUM-BRAKE">DRUM BRAKE VARIENT</option>
                <option value="DISC-BRACK-ALLOY">DISC BRAKE VARIENT(ALLOY WHEELS)</option>
                <option value="DISC-BRACK-W/O-ALLOY">DISC BRAKE VARIENT(W/O ALLOY WHEELS)</option>
              </select>        
        </div>
        
        <div class="row1">
        
            <label for="ddate" style="margin-left:1.5rem;">Delivery Date</label>
            <input type="date" class="form-control" id="fname" name="delv_date" value="<?php echo $delv_date; ?>" required>
        </div>  
          <br>
        <button type="submit" name="update-changes" class="btn btn-primary" style="margin-left:9rem;width:8rem;background-color:#f98e1d;border:0.5px solid #f98e1d;height:30px;border-radius:6px;">Update</button>
      </form>
    </div>
    </section>
     
  </body>
</html>

<?php 
  
  $DATABASE_HOST = 'localhost';
  $DATABASE_USER = 'root';
  $DATABASE_PASS = '';
  $DATABASE_NAME = 'wheels&deals';
  
  $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
  
  if (mysqli_connect_error()) {
  exit('Error connecting to the database' . mysqli_connect_error());
  }

  if(isset($_POST['update-changes'])) {
    $model = $_POST['model'];
    $color = $_POST['color'];
    $varient = $_POST['varient'];
    $delv_date = $_POST['delv_date'];

    $sql = "UPDATE `vechile_booking` SET `model`='$model',`color`='$color',`varient`='$varient' WHERE booking_id = '$book_id'";
    $result = mysqli_query($con,$sql);
    if($result) {
      $inner_sql = "UPDATE `bills` SET `delv_date`='$delv_date' WHERE booking_id = '$book_id'";
      $inner_result = mysqli_query($con,$inner_sql);
      if($inner_result){
        echo "<script>alert('Updated Successfully');</script>";
        echo "<script>window.location.href='../userpage/updates_changes.php'</script>";
      }
    }
  }

?>