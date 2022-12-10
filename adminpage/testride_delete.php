<?php

    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'wheels&deals';
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

        $name = $_GET['name'];
        $query1 = "DELETE FROM test_ride WHERE name = '$name'" ;
        $result1 = mysqli_query($con,$query1);

        if($result1){
          echo "<script>alert('Deleted Successfully');</script>";
          echo "<script>window.location.href='../adminpage/Testride_users.php'</script>";
          }
        
?>