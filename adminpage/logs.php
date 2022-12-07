<?php
  include ('../adminpage/a_connect.php');
   session_start();
   if(!isset($_SESSION['a_name'])) {
    header('location: admin_login.html');
   } 
?>

<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'wheels&deals';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$query = "SELECT count(*) AS total from vechile_booking";
              $result = mysqli_query($con,$query);
              if($result) {
                while($rows = mysqli_fetch_assoc($result)){
                  $count = $rows['total'];
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
    <!-- Bootstrap CSS -->
    
    <link href="../adminpage/admin_style.css" rel="stylesheet" type="text/css">
    <title>Vehicle Logs</title>
  </head>
  <style>
    section{
      background:url(../background_img/bookings.jpeg);
      background-repeat: no-repeat;
      background-size: cover;
      width:1268px;
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
          <span class="sub-heading"><?php echo $_SESSION['a_name']; ?>
          </span>
        </div>
      </div>
    </header> 
    <div class="menu-bar">
      <div class="menu">
        <ul class="menu-links">
        <li class="nav-link">
            <a href="../adminpage/a_dashboard.php">
            <i class="fa-solid fa-users icon"></i>
              <span class="text nav-text">Dashboard</span>
            </a>
          </li>
        <li class="nav-link">
            <a href="../adminpage/clients.php">
            <i class="fa-solid fa-users icon"></i>
              <span class="text nav-text">Clients</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/logs.php" style="background-color: #f98e1d; color: white">
              <i class="fa-solid fa-bars icon"></i>
              <span class="text nav-text">Logs</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/Testride_users.php">
              <i class="fa-solid fa-bars icon"></i>
              <span class="text nav-text">Test-Ride Clients</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/UserInfo.php">
              <i class="fa-solid fa-bars icon"></i>
              <span class="text nav-text">Users Info</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/stock_price.php">
            <i class="fa-solid fa-bars icon"></i>
              <span class="text nav-text">Availability/Price</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="#">
            <i class="fa-solid fa-wrench icon"></i>
              <span class="text nav-text">Updates/Changes</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/profile.php">
            <i class="fa-solid fa-user icon"></i>
              <span class="text nav-text">Profile</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/logout.php">
            <i class="fa-solid fa-power-off icon"></i>
              <span class="text nav-text">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div> 
  </nav>  
   <section class="home">
      <div class="text"><h1 style="color:#ffff ;">Manage Bookings</h1></div>
      <div class="border" style="border: 0.5px solid white;"></div>
      <br>
        <div class="container">
        <div class="text"><h4 style="color:#f98e1d;margin-top:-40px;">Total Bookings : <?php echo $count; ?></h4></div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Booking ID</th>
              <th scope="col">User ID</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Model</th>
              <th scope="col">Location</th>
              <th scope="col">Color</th>
              <th scope="col">Varient</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $DATABASE_HOST = 'localhost';
              $DATABASE_USER = 'root';
              $DATABASE_PASS = '';
              $DATABASE_NAME = 'wheels&deals';
              $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
              if (mysqli_connect_error()) {
                exit('Error connecting to the database' . mysqli_connect_errno());
              }

              $sql = "SELECT * from vechile_booking";
              $resultj = mysqli_query($con,$sql);
              if($resultj){
                while($row = mysqli_fetch_array($resultj)){
                  $booking_id = $row['booking_id'];
                  $u_id = $row['u_id'];
                  $email_ = $row['email_'];
                  $ph_no = $row['ph_no'];
                  $model = $row['model'];
                  $location_ = $row['location_'];
                  $color = $row['color'];
                  $varient = $row['varient'];
                  echo '<tr>
                  <td scope="row">'.$booking_id.'</td>
                  <td>'.$u_id.'</td>
                  <td>'.$email_.'</td>
                  <td>'.$ph_no.'</td>
                  <td>'.$model.'</td>
                  <td>'.$location_.'</td>
                  <td>'.$color.'</td>
                  <td>'.$varient.'</td>
                  <td>
                    <button name="update" style="background-color: #f98e1d;
                    color: white;padding: 8px 16px;margin: 8px 0;border: none;cursor: pointer;
                    border-radius:8px;
                    text-decoration:none;">Update</button>
                    <button name="delete" style="background-color: #ff0011;
                    color: white;padding: 8px 16px;margin: 8px 0;border: none;cursor: pointer;
                    border-radius:8px;
                    text-decoration:none;">Delete</button>
                  </td>
                </tr>';
                }
              }
            ?>  
          </tbody>
        </table>
        </div>
   </section>
    
  </body>
</html>