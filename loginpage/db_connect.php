<?php
    include ('../loginpage/connect.php');  
    session_start();
    if(isset($_SESSION['username'])&&isset($_SESSION['password']))  {  
        $username = $_SESSION['username'];
        $password = $_SESSION['password']; 
    }
?>