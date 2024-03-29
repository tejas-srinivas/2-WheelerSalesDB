<?php
  include ('../adminpage/a_connect.php');
   session_start();
   if(!isset($_SESSION['a_name'])) {
    header('location: admin_login.html');
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
    <title>Users Info</title>
  </head>
  <style>
    section{
      background:url(../background_img/background7.jpg);
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
          </<span>
        </div>
      </div>
    </header> 
    <div class="menu-bar">
      <div class="menu">
        <ul class="menu-links">
        <li class="nav-link">
            <a href="../adminpage/a_dashboard.php" >
            <i class="fa-solid fa-chart-line icon"></i>
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
            <a href="../adminpage/logs.php">
              <i class="fa-solid fa-motorcycle icon"></i>
              <span class="text nav-text">Bookings</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/Testride_users.php">
              <i class="fa-solid fa-road icon"></i>
              <span class="text nav-text">Test-Ride Clients</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/UserInfo.php" style="background-color: #f98e1d; color: white">
              <i class="fa-solid fa-bars icon"></i>
              <span class="text nav-text">Users Info</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/stock_price.php">
            <i class="fa-solid fa-money-bill icon"></i>
              <span class="text nav-text">Availability/Price</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/bills.php">
            <i class="fa-solid fa-money-bill icon"></i>
              <span class="text nav-text">Bills</span>
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
      <div class="text" style="color:white;"><h1>Users Info</h1></div>
      <div class="border" style="border: 0.5px solid white"></div>
      <br>
      <br>
        <div class="container" style="background: #f2f3f7;
    box-shadow: 5px 5px 10px #999;
    padding: 41px 43px;
    border-radius: 20px;
    width: 699px;
    margin-left: 18rem;
    align-items: center;
    font-size: small;
">
        <table class="content">
          <thead>
            <tr>
              <th scope="col">User ID</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Aadhar No</th>
              <th scope="col">Driving License</th>
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
              $sql = "SELECT * from user_verification";
              $resultj = mysqli_query($con,$sql);
              if($resultj){
                while($row = mysqli_fetch_array($resultj)){
                  $u_id = $row['u_id'];
                  $firstname = $row['firstname'];
                  $lastname = $row['lastname'];
                  $aadhar_no = $row['aadhar_no'];
                  $driving_license = $row['driving_license'];
                  echo '<tr>
                  <td scope="row">'.$u_id.'</td>
                  <td>'.$firstname.'</td>
                  <td>'.$lastname.'</td>
                  <td>'.$aadhar_no.'</td>
                  <td>'.$driving_license.'</td>
                  
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