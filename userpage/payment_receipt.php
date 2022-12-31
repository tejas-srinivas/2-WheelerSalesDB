<?php
  include ('../loginpage/connect.php');
   session_start();
   if(!isset($_SESSION['username'])) {
    header('location: login.html');
   } 
?>

<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'wheels&deals';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_error()) {
  exit('Error connecting to the database' . mysqli_connect_errno());
}

$u_id = $_SESSION['u_id'];
$firstname = $_SESSION['first_name'];
$lastname = $_SESSION['last_name'];
$road_tax = 10500;
$insurance = 2500;
$accessory_price = 4325;

$query = "SELECT * FROM vechile_booking WHERE u_id='$u_id'";
$result = mysqli_query($con,$query);
if($result) {
  $row = mysqli_fetch_array($result);
  $booking_id = $row['booking_id'];
  $vechile_id = $row['vechile_id'];
  $model = $row['model'];
  $color = $row['color'];
  $varient = $row['varient'];
  $location = $row['location_'];
  $status = 'Recieved';

  $counter = 1;
  while($counter < 7){
    if($row['vechile_id'] == $counter){
      $query = "SELECT ex_showroom FROM stock_price where vechile_id='$counter'";
      $resulti = mysqli_query($con,$query);
      if($resulti){
      $row = mysqli_fetch_assoc($resulti);
      $ex_showroom = $row['ex_showroom'];
      settype($ex_showroom,"integer"); 
      break; 
     }
    }
    else {
      $counter++;
    }
  }
  
}
$d=strtotime("+1 Week");
$delv_date = date("Y-m-d", $d) ;
$total_bill = $road_tax + $insurance + $accessory_price + $ex_showroom."/-";
if(isset($_POST['pay'])){
  $query = "INSERT INTO bills(booking_id,delv_date,location_,color,model,varient,ex_showroom,accessory_price,road_tax,insurance,total_price) VALUES ('$booking_id','$delv_date','$location','$color','$model','$varient','$ex_showroom','$accessory_price','$road_tax','$insurance','$total_bill')";
  $result = mysqli_query($con,$query);
  if($result){
    echo "<script>alert('Payment recieved Successfully...');</script>";
    echo "<script>window.location.href='../userpage/booking_confirmed.php'</script>";
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
    <link href="user_style.css" rel="stylesheet" type="text/css">
    <title>Bill Details</title>
  </head>
  <style>
    table, th, td {
      border:0.5px solid black;
      border-collapse:collapse;
      font-size: 20px;
      padding: 0px 8px 20px;
    }
   
</style>
  <body>
    
  <section class="home">
    <!-- <div class="text">
      <h1 style="color:#000"><b>Booking Bill</b></h1>
    </div>
    <div class="border"></div> -->
    <br>
    <br>
    
  <div class="container" style="margin-left:-15rem;">
    <center><img src="../homepage/logo.png" style="width:300px; margin-top: -5px; height:120px;">
    <h1 style="color:#000"><b>Payment Receipt</b></h1></center>
    <br>
    <br>
    <br> 
    <h2>Name : <?php echo $firstname; ?> <?php echo $lastname; ?></h2>
    <h2>Booking No : <?php echo $booking_id; ?></h2>
    <h2>Payment Status : <?php echo $status; ?></h2>
    <h2>Booking Status : <?php echo 'Processing'; ?></h2>
    <h2>Delivery Date : <?php echo $delv_date; ?></h2>
  <table>
  <tr>
    <th>Model</th>
    <th>Color</th>
    <th>Varient</th>
    <th>Location</th>
    <th>Ex-Showroom</th>
    <th>Accessories</th>
    <th>Road Tax</th>
    <th>Insurance</th>
  </tr>
  <br>
  <tr>
    <td> <?php echo $model; ?></td>
    <td> <?php echo $color; ?></td>
    <td> <?php echo $varient; ?></td>
    <td> <?php echo $location; ?></td>
    <td>₹ <?php echo $ex_showroom; ?></td>
    <td>₹ <?php echo $accessory_price; ?></td>
    <td>₹ <?php echo $road_tax; ?></td>
    <td>₹ <?php echo $insurance; ?></td>
  </tr>
  </table>
      <br>
    <div class="total-bill" style="margin-left:40rem;">
      <div class="bord" style="border:0.5px solid black;width:15rem;"></div>
      <h1 ><b> Total Bill : ₹ <?php echo $total_bill; ?></b></h1>
      <div class="bord" style="border:0.5px solid black;width:15rem;"></div>
    </div>
  </div>
  <br>
    <button type='submit' class="button" onclick="window.print()" style="border-radius: 8px;margin-left: 100px;background-color:#f98e1d;color:#f2f3f7;border:0.5px solid #f98e1d;width:100px;height:40px;margin-left:25rem;"><b>Print</b></button>
    <button type='submit' class="button" style="border-radius: 8px;margin-left: 250px;background-color:#f98e1d;border:0.5px solid #f98e1d;width:100px;height:40px;margin-left:1rem;"><a href="../userpage/dashboard.php" style="color:#f2f3f7;text-decoration: none;"><b>Dashboard</b></a></button>
  </body>
</html>