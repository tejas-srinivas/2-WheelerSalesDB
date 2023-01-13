<?php
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'wheels&deals';

    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

    if (mysqli_connect_error()) {
    exit('Error connecting to the database' . mysqli_connect_error());
    }

 if (isset($_GET['vec_id'])) {
    $id = intval($_GET['vec_id']);
    $book_id = $_GET['up_id'];
    $query1 = "SELECT * FROM vechile_booking WHERE booking_id = '$book_id'";
    $result1 = mysqli_query($con, $query1);
    if ($result1) {
      $row = mysqli_fetch_array($result1);
      $vec = $row['vechile_id'];
      $email = $row['email_'];
      $ph_no = $row['ph_no'];
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="../userpage/dropdownChange.js"></script>
  <title>Booking Changes</title>
</head>

<body>
  <form action="logs_update.php" method="post">
    
    <div class="container" style="display:flex;flex-direction:column;align-items:center;margin-top:5rem;">
      <form action="logs_update.php" method="POST">
        <center><img src="../registerpage/logo.png" style="width: 450px; height: 150px; margin-top:-45px"></center>
        <center><h2 style="margin-top:-10px ;">Update Vehicle Booking ...</h2></center>
          <div class="form-group">
            <input type="hidden" name="booking_id" value="<?php echo $id; ?>" >
            <input type="hidden" name="vechile_id" value="<?php echo $book_id; ?>">
          </div>
          <div class="form-group" style="width:30rem;">
              <label for="ddate">Delivery Date</label>
              <input type="date" class="form-control" id="fname" name="delv_date" value="<?php echo $delv_date; ?>" required>
          </div>
          <br>
          <div class="form-group" style="width:30rem;">
              <label for="fname">Phone Number</label>
              <input type="text" class="form-control" id="fname" name="ph_no" value="<?php echo $ph_no; ?>" required>
          </div>
          <br>
          <div class="form-group" style="width:30rem;">
              <label for="model">Model</label>
              <br>
              <img class="img" src="../userpage/Select.png" id="img" width="350px" height="250px">
              <select id="model" name="model" onchange="dropdownChange(this.id,'color');" required>
                <option value="<?php echo $model; ?>"><?php echo $model; ?></option>
                <option value="">------</option>
                <option name="activa" value="Activa-6G">Activa-6G</option>
                <option name="access" value="Access-125">Access-125</option>
                <option name="jupiter" value="Jupiter-125">Jupiter-125</option>
                <option name="aprila" value="Aprila">Aprila</option>
                <option name="ntorq" value="Ntorq">Ntorq</option>
                <option name="dio" value="Dio">Dio</option>
              </select>
          </div>
          
          <div class="form-group" style="width:30rem;margin-top:0.5rem;">
              <label for="color">Color</label>
              <br>
              <select id="color" name="color" required> 
                <option value="<?php echo $color ?>"><?php echo $color; ?></option>
                <option value="">------</option>
              </select>
          </div>  

          <div class="form-group" style="width:30rem;margin-top:0.5rem;">
              <label for="color">Status</label>
              <br>
              <select id="status" name="status" required> 
                <option value="Processing">Processing</option>
                <option value="Delivered">Delivered</option>
              </select>
          </div>
            
          <div class="form-group" style="width:30rem;margin-top:0.5rem;">
              <label for="model">Varient</label>
              <br>
              <select id="varient" name="varient" required>
                <option value="<?php echo $varient ?>"><?php echo $varient; ?></option>
                <option value="">------</option>
                <option value="DRUM-BRAKE">DRUM BRAKE VARIENT</option>
                <option value="DISC-BRACK-ALLOY">DISC BRAKE VARIENT(ALLOY WHEELS)</option>
                <option value="DISC-BRACK-W/O-ALLOY">DISC BRAKE VARIENT(W/O ALLOY WHEELS)</option>
              </select>
          </div>

          <div class="form-group" style="width:30rem;margin-top:0.5rem;">
              <label for="location">Select Delivery Location</label>
              <br>  
              <select id="location" name="location_" required>
                <option value="<?php echo $location ?>"><?php echo $location; ?></option>
                <option value="">------</option>
                <option value="Vijaynagar">Vijaynagar</option>
                <option value="Yelahanka">Yelahanka</option>
                <option value="Indranagar">Indranagar</option>
                <option value="Koramangla">Koramangla</option>
              </select>
          </div>
            <br>
        <button type="submit" name="update" class="btn btn-primary" style="width:10rem;background-color:#f98e1d;border:0.5px solid #f98e1d">Update</button>
    </div>
  </form>
  </div>

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

  if (isset($_POST['update'])) {
    $booking = $_POST['vechile_id'];
    $ph_no_ = $_POST['ph_no'];
    $model_ = $_POST['model'];
    $color_ = $_POST['color'];
    $varient_ = $_POST['varient'];
    $email_ = $_POST['email_'];
    $location_ = $_POST['location_'];
    $status_ = $_POST['status'];
    $delv_date_ = $_POST['delv_date'];

    // if(isset($_POST['model']))
    //   {
    //     if($_POST['model'] == 'Activa-6G'){
    //       $vechile_id = 1;
    //     }
    //     elseif($_POST['model'] == 'Access-125'){
    //       $vechile_id = 2;
    //     }
    //     elseif($_POST['model'] == 'Jupiter-125'){
    //       $vechile_id = 3;
    //     }
    //   }
    $query = "UPDATE `vechile_booking` SET `ph_no` = '$ph_no_',`model`='$model_', `location_` = '$location_' , `color`='$color_' , `varient`='$varient_',`status`='$status_' WHERE `booking_id` = '$booking'";
    $result = mysqli_query($con,$query);
    if($result){
      $query1 = "UPDATE `bills` SET `delv_date`='$delv_date_',`model`='$model_',`color`='$color_', `varient`='$varient_',`location_` = '$location_' WHERE `booking_id` = '$booking'";
      $result1 = mysqli_query($con,$query1);
      if ($result1 == TRUE) {
        echo "<script>alert('Updated Sucessfully');</script>";
        echo "<script>window.location.href='../adminpage/logs.php'</script>";
      }
    }
  }
?>