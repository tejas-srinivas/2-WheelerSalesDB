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
<div class="control" style="display:flex;flex-direction:column;align-items:center;margin-top:15rem;">
<div class="form-group">
    <input type="hidden" value="<?php echo intval($_GET['vec_id']) ?>" name="vechile_id">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Availability</label>
    <input type="text" class="form-control" id="availability" placeholder="Enter Availability" name="available" style="width:30rem;">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Ex-Showroom</label>
    <input type="text" class="form-control" id="availability"  placeholder="Enter Ex-Showroom" name="ex_showroom" style="width:30rem;">
  </div>
    <br>
  <button type="submit" name="update" class="btn btn-primary" style="width:10rem;">Update</button>
</div>
</form>
  </body>
</html>

<?php 
    if(isset($_POST['update'])) {
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'wheels&deals';

        $con = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);
        
        if(mysqli_connect_error()) {
            exit('Error connecting to the database'.mysqli_connect_error());
        }
        
        //print_r($_GET);
          $vechile_id = $_POST['vechile_id'];
          $available = $_POST['available'];
          $ex_showroom = $_POST['ex_showroom'];
          $query = "UPDATE `stock_price` SET  `available` = '$available', `ex_showroom` = '$ex_showroom' WHERE `vechile_id` = '$vechile_id'";
          $result = mysqli_query($con,$query);
          if($result) {
              echo "<script>alert('Updated Sucessfully');</script>";
              echo "<script>window.location.href='../adminpage/stock_price.php'</script>";
          }
      }
      if(isset($_GET['vec_id'])){
        $id = 
        $query = "SELECT * FROM stock_price WHERE ";
      }
?>
