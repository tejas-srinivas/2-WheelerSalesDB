<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'registration_form';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if (mysqli_connect_error()) {
        exit('Error connecting to the database' . mysqli_connect_errno());
    }
    $name = $_POST['name'];
    $mob_no = $_POST['mob_no'];
    $email = $_POST['email'];
    $model = $_POST['model'];
    $location_ = $_POST['location_'];
if(isset($_POST['submit']))  {  
    $stmt= $con->prepare('INSERT INTO test_ride(name,mob_no,email,model,location_) VALUES (?,?,?,?,?)');   //end-to-end password protection
    $stmt->bind_param('sisss',$name,$mob_no,$email,$model,$location_);  //s=string ,i=integer
    $stmt->execute(); //executes the function
    if($stmt) {
        echo "<script>alert('Your test ride has been booked Successfully!');</script>";
        echo "<script>window.location.href='../loginpage/login.html'</script>";
    }
    else {
        echo 'Error Occured inserting into records';
    }
}
}    
?> 
    
