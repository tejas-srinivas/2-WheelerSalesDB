<?php 
    include ('../loginpage/connect.php');
    session_start();
    session_unset();
    session_destroy();
    echo "<script>window.location.href='../loginpage/login.html'</script>";
?>