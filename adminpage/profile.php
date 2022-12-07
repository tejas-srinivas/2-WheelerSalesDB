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
    <title>Admin Profile</title>
  </head>
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
            <a href="../adminpage/logs.php">
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
          <li class="nav-link" style="background-color: #f98e1d; color: white">
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
      <div class="text"><h1>Admin Profile</h1></div>
      <div class="border"></div>
      <br>
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
          <h1 style="margin-top:-10px;font-size:25px;">Edit Admin Profile</h1>
        <br>  
          <div class="name">
            <label for="a_name" style="font-size:20px;"><b>Admin Name :<b></label>
          </div>
          <div class="input">
            <input type="text" id="a_name" name="a_name" value="<?php echo $_SESSION['a_name']; ?>" style="border-radius: 6px; width: 400px;height: 40px;px;border:1px solid gray;box-sizing:border-box;padding: 10px 15px;font-size:16px;" required>
          </div>
          <br>
          <div class="name">
            <label for="a_email" style="font-size:20px;"><b>Email :</b></label>
          </div>
          <div class="input">
            <input type="text" id="a_email" name="a_email" value="<?php echo $_SESSION['a_email']; ?>" style="font-size:16px;border-radius: 6px; width: 400px;height:40px;border:1px solid gray;box-sizing:border-box;padding: 10px 15px;" required>
          </div>
          <br>
          <div class="name">
            <label for="a_username" style="font-size:20px;"><b>Admin Username :</b></label>
          </div>
          <div class="input">
            <input type="text" id="a_username" name="a_username" value="<?php echo $_SESSION['a_username']; ?>" style="font-size:16px;border-radius: 6px; width: 400px;height:40px;border:1px solid gray;box-sizing:border-box;padding: 10px 15px;" required>
          </div>
        
        <br>    
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