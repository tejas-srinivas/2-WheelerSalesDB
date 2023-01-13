<?php

    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'wheels&deals';
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

        $booking_id = $_GET['del_id'];
        $query1 = "DELETE FROM bills WHERE booking_id = '$booking_id'" ;
        $result1 = mysqli_query($con,$query1);

        if($result1){
          echo "<script>alert('Deleted Bills Successfully');</script>";
          echo "<script>window.location.href='../adminpage/bills.php'</script>";
          }
        
?>