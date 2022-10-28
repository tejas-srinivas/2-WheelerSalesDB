<?php 
    include ('../loginpage/connect.php');
    session_start();
    session_unset();
    session_destroy();
    echo "<script>window.location.href='../adminpage/admin_login.html'</script>";
?>