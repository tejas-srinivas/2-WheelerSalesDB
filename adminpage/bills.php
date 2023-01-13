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
$query = "SELECT count(*) AS total from bills   ";
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
    .content {
      border-collapse: collapse;
      margin : 25px 2px;
      font-size: 0.9rem;
      min-width: 600px;
    }

    .content thead tr{
      background-color: #f98e1d;
      color: #ffffff;
      text-align: left;
      font-weight: bold;
    }

    .content th, .table td {
      padding: 7px 9px ;
      height: 48px;
      min-width: 60px;
    }

    .content tbody tr{
      border-bottom: 1px solid #f98e1d;
      
    }

    .content tbody tr:nth-of-type(even){
      background-color: lightgray;
    }

    .content tbody tr:last-of-type {
      border-bottom: 2px solid #f98e1d;
    }

    .content td{
      padding-left: 15px ;
      height: 15px;
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
              <span class="text nav-text">Logs</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../adminpage/Testride_users.php">
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
            <a href="../adminpage/stock_price.php" style="background-color: #f98e1d; color: white">
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
   <section class="home" style="height:120vh;">
      <div class="text"><h1 style="color:#ffff ;">Manage Bills</h1></div>
      <div class="border" style="border: 0.5px solid white;"></div>
      <br>
      <br>
        <div class="container" style="padding: 45px 23px;width: 1212px;
    margin-left: 2rem;">
        <div class="text"><h4 style="color:#f98e1d;margin-top:-40px;margin-left:-3.5rem;">Total Bills : <?php echo $count; ?></h4></div>
        <table class="content" style="font-size:12.9px;margin-top:-0.4rem;">
          <thead>
            <tr>
              <th scope="col">Booking ID</th>
              <th scope="col">Delv_Date</th>
              <th scope="col">Ex-Showroom</th>
              <th scope="col">Model</th>
              <th scope="col">Location</th>
              <th scope="col">Color</th>
              <th scope="col">Varient</th>
              <th scope="col">Acc_Price</th>
              <th scope="col">Road_Tax</th>
              <th scope="col">Insurance</th>
              <th scope="col">Tot_Price</th>
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

              $sql = "SELECT * from Bills";
              $resultj = mysqli_query($con,$sql);
              if($resultj){
                while($row = mysqli_fetch_array($resultj)){
                  $booking_id = $row['booking_id'];
                  $delv_date = $row['delv_date'];
                  $ex_showroom = $row['ex_showroom'];
                  $model = $row['model'];
                  $location_ = $row['location_'];
                  $color = $row['color'];
                  $varient = $row['varient'];
                  $accessory_price = $row['accessory_price'];
                  $road_tax = $row['road_tax'];
                  $insurance = $row['insurance'];
                  $total_price = $row['total_price'];
                  echo '<tr>
                  <td scope="row">'.$booking_id.'</td>
                  <td>'.$delv_date.'</td>
                  <td>₹'.$ex_showroom.'</td>
                  <td>'.$model.'</td>
                  <td>'.$location_.'</td>
                  <td>'.$color.'</td>
                  <td>'.$varient.'</td>
                  <td>₹'.$accessory_price.'</td>
                  <td>₹'.$road_tax.'</td>
                  <td>₹'.$insurance.'</td>
                  <td>₹'.$total_price.'</td>
                  <td>
                    <button name="delete" style="background-color: #ff0011;
                    color: white;padding: 8px 16px;margin: 8px 0;border: none;cursor: pointer;
                    border-radius:8px;
                    text-decoration:none;"><a href="bills_delete.php?del_id='.$booking_id.'" style="color:white;text-decoration:none;">Delete</a></button>
                  </td>
                </tr>';
                }
              }
            ?>  
          </tbody>
        </table>
        </div>
      </div>
   </section>
    
  </body>
</html>