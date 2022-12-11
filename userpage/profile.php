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

  $con = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);

  if(mysqli_connect_error()) {
      exit('Error connecting to the database'.mysqli_connect_error());
  } 
  
  $u_id = $_SESSION['u_id'];
  $query = "SELECT * FROM users WHERE u_id='$u_id'";
  $result = mysqli_query($con,$query);
  if($result) {
    $row = mysqli_fetch_assoc($result);
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $user_name = $row['username'];
    $email_ = $row['email'];
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
  <!-- <link href="user_details.css" rel="stylesheet" type="text/css"> -->
  <title>User Profile</title>
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
            <a href="updates_changes.php">
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
            <a href="../userpage/profile.php" style="background-color: #f98e1d; color: white">
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
      <h1 style="color:#000"><b>User Profile</b></h1>
    </div>
    <div class="border"></div>
    <br>
    
    <div class="container" style="background: #f2f3f7;
    box-shadow: 5px 5px 10px rgb(28 28 28);
    padding: 36px 27px;
    border-radius: 20px;
    width: 640px;
    margin-left: 20rem;
    align-items: center;
    font-size: small;">
      <form action="profile.php" method="post" style="margin-left:6rem;">
        <img src="../registerpage/logo.png" style="width: 450px; height: 150px; margin-top:-45px;margin-left:-2rem;">
          <h1 style="margin-top:-10px;font-size:25px;">Edit User Profile</h1>
        <br>  
<div class="row-25">
          <div class="name">
            <label for="fname" style="font-size:20px;"><b>First Name :<b></label>
          </div>
          <div class="input">
            <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>" style="border-radius: 6px; width: 400px;height: 40px;px;border:1px solid gray;box-sizing:border-box;padding: 10px 15px;font-size:16px;" required>
          </div>
          <br>
          <div class="name">
            <label for="lname" style="font-size:20px;"><b>Last Name :</b></label>
          </div>
          <div class="input">
            <input type="text" id="last_name" name="last_name" value="<?php echo $last_name; ?>" style="font-size:16px;border-radius: 6px; width: 400px;height:40px;border:1px solid gray;box-sizing:border-box;padding: 10px 15px;" required>
          </div>
          <br>
</div>
          <div class="name">
            <label for="username" style="font-size:20px;"><b>Username :</b></label>
          </div>
          <div class="input">
            <input type="text" id="username" name="username" value="<?php echo $user_name; ?>" style="font-size:16px;border-radius: 6px; width: 400px;height:40px;border:1px solid gray;box-sizing:border-box;padding: 10px 15px;" required>
          </div>
          <br>
          <div class="name">
            <label for="email" style="font-size:20px;"><b>Email :</b></label>
          </div>
          <div class="input">
            <input type="text" id="email" name="email" value="<?php echo $email_; ?>" style="font-size:16px;border-radius: 6px; width: 400px;height:40px;border:1px solid gray;box-sizing:border-box;padding: 10px 15px;" required>
          </div>
          <br>
          <!-- <div class="name">
            <label for="password" style="font-size:20px;"><b>Password :</b></label>
          </div>
          <div class="input">
                <input type="password" name="password" placeholder="Password" id="password" style="font-size:16px;border-radius: 6px; width: 400px;height:40px;border:1px solid gray;box-sizing:border-box;padding: 10px 15px;" required>
          </div> -->  
          <div class="button">
            <button type='submit' class="update" name="update" value="book-now" id="update" style="background-color: #f98e1d;
  color: white;
  padding: 8px 16px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  border-radius:8px;">
              <b>Update</b>
            </button>
          </div>
        </div>
      </form>
    </div>
        
  </section>
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'wheels&deals';

        $con = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);
    
        if(mysqli_connect_error()) {
            exit('Error connecting to the database'.mysqli_connect_error());
        }
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            // $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $u_id = $_SESSION['u_id'];

            $query = "UPDATE `users` SET `first_name` = '$first_name', `last_name` = '$last_name', `email` = '$email' WHERE `u_id` = '$u_id'";
            $result = mysqli_query($con,$query);
            if($result){
              echo "<script>alert('Profile Updated !');</script>";
              echo "<script>window.location.href='../userpage/dashboard.php'</script>";
            }
            else{
              echo "Error Updating";
            }
        }
?>