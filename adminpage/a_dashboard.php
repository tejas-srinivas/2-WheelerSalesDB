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
  $query = "SELECT count(*) AS total_users from users";
  $result = mysqli_query($con,$query);
  if($result)
  {
    while($rows=mysqli_fetch_assoc($result))
    {
      $total_users = $rows['total_users'];
    }
  }     
  $query = "SELECT count(*) AS total_rides from test_ride";
  $result = mysqli_query($con,$query);
  if($result)
  {
    while($rows=mysqli_fetch_assoc($result))
    {
      $total_rides = $rows['total_rides'];
    }
  }     
  
  $query = "SELECT count(model) AS activa_count FROM `vechile_booking` WHERE model LIKE'Act%'";
  $result = mysqli_query($con,$query);
  if($result)
  {
    while($rows=mysqli_fetch_assoc($result))
    {
      $activa_count = $rows['activa_count'];
    }
  }  
  
  $query = "SELECT count(model) AS access_count FROM `vechile_booking` WHERE model LIKE'Acc%'";
  $result = mysqli_query($con,$query);
  if($result)
  {
    while($rows=mysqli_fetch_assoc($result))
    {
      $access_count = $rows['access_count'];
    }
  }  

  $query = "SELECT count(model) AS jupiter_count FROM `vechile_booking` WHERE model LIKE'Jup%'";
  $result = mysqli_query($con,$query);
  if($result)
  {
    while($rows=mysqli_fetch_assoc($result))
    {
      $jup_count = $rows['jupiter_count'];
    }
  }  

  $query = "SELECT count(model) AS aprilia_count FROM `vechile_booking` WHERE model LIKE'apr%'";
  $result = mysqli_query($con,$query);
  if($result)
  {
    while($rows=mysqli_fetch_assoc($result))
    {
      $apr_count = $rows['aprilia_count'];
    }
  }  
  $query = "SELECT count(model) AS ntorq_count FROM `vechile_booking` WHERE model LIKE'nto%'";
  $result = mysqli_query($con,$query);
  if($result)
  {
    while($rows=mysqli_fetch_assoc($result))
    {
      $nto_count = $rows['ntorq_count'];
    }
  }  
  $query = "SELECT count(model) AS dio_count FROM `vechile_booking` WHERE model LIKE'dio%'";
  $result = mysqli_query($con,$query);
  if($result)
  {
    while($rows=mysqli_fetch_assoc($result))
    {
      $dio_count = $rows['dio_count'];
    }
  }  

  $query = "SELECT SUM(total_price) AS revenue FROM `bills`";
  $result = mysqli_query($con,$query);
  if($result)
  {
    while($rows=mysqli_fetch_assoc($result))
    {
      $revenue = $rows['revenue'];
    }
  }  
  
  $query = "SELECT SUM(total_price) AS amt FROM `bills` WHERE location_ LIKE'Y%'";
  $result = mysqli_query($con,$query);
  if($result)
  {
    while($rows=mysqli_fetch_assoc($result))
    {
      $amt = $rows['amt'];
    }
  }  

  $query = "SELECT SUM(total_price) AS amt_k FROM `bills` WHERE location_ LIKE'K%'";
  $result = mysqli_query($con,$query);
  if($result)
  {
    while($rows=mysqli_fetch_assoc($result))
    {
      $amt_k = $rows['amt_k'];
    }
  }  
  
  $query = "SELECT SUM(total_price) AS amt_v FROM `bills` WHERE location_ LIKE'V%'";
  $result = mysqli_query($con,$query);
  if($result)
  {
    while($rows=mysqli_fetch_assoc($result))
    {
      $amt_v = $rows['amt_v'];
    }
  }  

  $query = "SELECT SUM(total_price) AS amt_i FROM `bills` WHERE location_ LIKE'I%'";
  $result = mysqli_query($con,$query);
  if($result)
  {
    while($rows=mysqli_fetch_assoc($result))
    {
      $amt_i = $rows['amt_i'];
    }
  }  

  $query = "SELECT COUNT(*) AS bill FROM `bills`";
  $result = mysqli_query($con,$query);
  if($result)
  {
    while($rows=mysqli_fetch_assoc($result))
    {
      $bill = $rows['bill'];
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
    <title>Dashboard</title>
  </head>
  <style>
    section{
      /* background: rgb(131,58,180); */
      background: linear-gradient(70deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
      
      
      width:1268px;
      height: 200vh;
    }
    .cont{
        background: #f2f3f7;
        box-shadow: 5px 5px 10px rgb(28 28 28);
        padding: 9px 35px 5px;
        border-radius: 20px;
        width: 280px;
        margin-left: 4rem;
        align-items: center;
        font-size: small;
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
            <a href="../adminpage/a_dashboard.php" style="background-color: #f98e1d; color: white">
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
      <div class="text" style="color:white"><h1>Dashboard</h1></div>
      <div class="border" style="border: 0.5px solid white ;"></div>
      <br>
      <div class="main" style="display: flex;justify-content: center;">
        <div class="cont">
            <h1 style="font-size:x-large;text-align:center;"> TOTAL USERS </h1>
            <h1 style="font-size:100px;text-align:center;"> <?php echo $total_users; ?> </h1>
        </div>
        
        <div class="cont">
            <h1 style="font-size:x-large"> TOTAL BOOKINGS </h1>
            <h1 style="font-size:100px;text-align:center;"> <?php echo $count; ?> </h1>
        </div>
        
        <div class="cont">
            <h1 style="font-size:x-large;text-align:center;"> TEST RIDES </h1>
            <h1 style="font-size:100px;text-align:center;"> <?php echo $total_rides; ?> </h1> 
        </div>
      </div> 
      <br>
      
      <div class="main" style="display: flex;justify-content: center;">
        <div class="cont">
            <h1 style="font-size:x-large;text-align:center;"> BILLS GENERATED </h1>
            <h1 style="font-size:100px;text-align:center;"> <?php echo $bill; ?> </h1>
        </div>

        <div class="cont">
            <h1 style="font-size:x-large;text-align:center;"> TOTAL REVENUE </h1>
            <br>
            <br>  
            <h1 style="font-size:40px;text-align:center;"> ₹ <?php echo $revenue; ?> </h1>
        </div>

        <div class="cont">
            <h1 style="font-size:20px"> REVENUE PER BRANCH </h1>
            <br>
            <h1 style="font-size:20px;text-align:center;">Yelahanka: ₹<?php echo $amt; ?> </h1>
            <h1 style="font-size:20px;text-align:center;">Kormangala: ₹<?php echo $amt_k; ?> </h1>
            <h1 style="font-size:20px;text-align:center;">Vijaynagar: ₹<?php echo $amt_v; ?> </h1>
            <h1 style="font-size:20px;text-align:center;">Indranagar: ₹<?php echo $amt_i; ?> </h1>
        </div>
      </div>
      <br>
      
      <div class="main" style="display: flex;justify-content: center;">
        <div class="cont">
            <h1 style="font-size:x-large;text-align:center;"> ACTIVA SALES </h1>
            <h1 style="font-size:100px;text-align:center;"> <?php echo $activa_count; ?> </h1> 
        </div>

        <div class="cont">
            <h1 style="font-size:x-large;text-align:center;"> ACCESS SALES </h1>
            <h1 style="font-size:100px;text-align:center;"> <?php echo $access_count; ?> </h1>
        </div>

       
        <div class="cont">
            <h1 style="font-size:x-large;text-align:center;">JUPITER SALES </h1>
            <h1 style="font-size:100px;text-align:center;"> <?php echo $jup_count; ?> </h1>
        </div>
      </div>
      <br>
      <div class="main" style="display: flex;justify-content: center;">
        <div class="cont">
            <h1 style="font-size:x-large;text-align:center;"> APRILIA SALES </h1>
            <h1 style="font-size:100px;text-align:center;"> <?php echo $apr_count; ?> </h1> 
        </div>

        <div class="cont">
            <h1 style="font-size:x-large;text-align:center;"> NTORQ SALES </h1>
            <h1 style="font-size:100px;text-align:center;"> <?php echo $nto_count; ?> </h1>
        </div>

       
        <div class="cont">
            <h1 style="font-size:x-large;text-align:center;">DIO SALES </h1>
            <h1 style="font-size:100px;text-align:center;"> <?php echo $dio_count; ?> </h1>
        </div>
      </div>
  </section> 
  </body>
</html>
