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
    $query1 = "SELECT * FROM stock_price WHERE vechile_id = '$id'";
    $result1 = mysqli_query($con, $query1);
    if ($result1) {
      $row = mysqli_fetch_array($result1);
      $vec = $row['vechile_id'];
      $avail = $row['available'];
      $showroom = $row['ex_showroom'];
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
  <title>Update Availability</title>
</head>

<body>
  <form action="Stock_update.php" method="post">
    <div class="control" style="display:flex;flex-direction:column;align-items:center;margin-top:12rem;">
    <center><img src="../registerpage/logo.png" style="width: 450px; height: 150px; margin-top:-45px"></center>
    <center><h2 style="margin-top:-10px ;">Update Availability / Ex-Showroom</h2></center>
      <div class="form-group">
      <label for="exampleInputEmail1">Vehicle Id</label>
        <input type="text" class="form-control" value="<?php echo intval($_GET['vec_id']) ?>" name="vechile_id" style="width:30rem;" disabled>
        <input type="hidden" class="form-control" value="<?php echo intval($_GET['vec_id']) ?>" name="vechile_id" style="width:30rem;">
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputEmail1">Available / Not-Available</label>
        <input type="text" class="form-control" id="availability" value="<?php echo $avail ?>" name="available" style="width:30rem;">
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputEmail1">Ex-Showroom Price</label>
        <input type="text" class="form-control" id="availability" value="<?php echo $showroom ?>" name="ex_showroom" style="width:30rem;">
      </div>
      <br>
      <button type="submit" name="update" class="btn btn-primary" style="width:10rem;background-color:#f98e1d;border:0.5px solid #f98e1d">Update</button>
    </div>
  </form>
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
    $vechile_id = $_POST['vechile_id'];
    $available = $_POST['available'];
    $ex_showroom = $_POST['ex_showroom'];
    $query = "CALL `EXSHOWROOM`('$available','$ex_showroom','$vechile_id');";
    //$query = "UPDATE `stock_price` SET  `available` = '$available', `ex_showroom` = '$ex_showroom' WHERE `vechile_id` = '$vechile_id'";
    $result = mysqli_query($con, $query);
    if ($result) {
      echo "<script>alert('Updated Sucessfully');</script>";
      echo "<script>window.location.href='../adminpage/stock_price.php'</script>";
    }
  }
  
?>