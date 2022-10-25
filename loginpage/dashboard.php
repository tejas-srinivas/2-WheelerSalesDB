<?php
   session_start();
   if(!isset($_SESSION['username'])) {
    header('location: login.html');
   } 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Welcome page</title>
  </head>
  <body>
    <h1>Welcome
    <?php echo $_SESSION['username']; ?>
    </h1>

    <div class="container">
        <a class="btn btn-primary" href="logout.php">Logout</a>
    </div>

    
  </body>
</html>