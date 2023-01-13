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
$query = "SELECT count(*) AS total from book_logs";
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
    <title>Test-Ride Clients</title>
  </head>
  <style>
    section{
      background:url(../background_img/background8.jpg);
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
            <a href="../adminpage/a_dashboard.php">
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
            <a href="../adminpage/Testride_users.php" >
            <i class="fa-solid fa-road icon"></i>
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
            <a href="../adminpage/v_logs.php" style="background-color: #f98e1d; color: white">
            <i class="fa-solid fa-user icon"></i>
              <span class="text nav-text">Logs</span>
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
      <div class="text" style="color: white;"><h1>Testride Clients</h1></div>
      <div class="border" style="border: 0.5px solid white"></div>
      <br>
      <br>
        <div class="container" style="background: #f2f3f7;
    box-shadow: 5px 5px 10px #0000;
    padding: 41px 35px;
    border-radius: 20px;
    width: 680px;
    margin-left: 20rem;
    align-items: center;
    font-size: small;">
        <div class="text"><h4 style="color:#f98e1d;margin-top:-40px;">Logs Generated : <?php echo $count; ?></h4></div>
        <table class="content">
          <thead>
            <tr>
              <th scope="col">User_ID</th>
              <th scope="col">Booking_ID</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
              <th scope="col">Date_Time</th>
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
              $sql = "SELECT * from book_logs";
              $result = mysqli_query($con,$sql);
              if($result){
                while($row = mysqli_fetch_array($result)){
                  $uid = $row['u_id'];
                  $booking_id = $row['booking_id'];
                  $status = $row['status'];
                  $action = $row['action'];
                  $d_t = $row['date_time'];
                  echo '<tr>
                  <td scope="row">'.$uid.'</td>
                  <td>'.$booking_id.'</td>
                  <td>'.$status.'</td>
                  <td>'.$action.'</td>
                  <td>'.$d_t.'</td>
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