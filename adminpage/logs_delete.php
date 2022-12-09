<?php

    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'wheels&deals';
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

    $booking_id = $_GET['del_id'];
    $sql = "SELECT u_id FROM vechile_booking WHERE booking_id='$booking_id";
    $lock = mysqli_query($con,$sql);
    if($lock){
        $row = mysqli_fetch_assoc($lock);
        $u_id = $row['u_id'];
    }

        $query1 = "DELETE FROM vechile_booking WHERE booking_id = '$booking_id'" ;
        $result1 = mysqli_query($con,$query1);
        $query2 = "DELETE FROM accessory WHERE booking_id = '$booking_id'" ;
        $result2 = mysqli_query($con,$query2);
        $query3 = "DELETE FROM bills WHERE booking_id = '$booking_id'" ;
        $result3 = mysqli_query($con,$query3);
        $query4 = "DELETE FROM user_verification WHERE u_id= '$u_id'";
        $result4= mysqli_query($con,$query4);

        if($result1){
          echo "<script>alert('Booking is Deleted');</script>";
          echo "<script>window.location.href='../adminpage/logs.php'</script>";
          }
        
?>