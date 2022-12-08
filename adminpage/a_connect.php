 <?php

    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'wheels&deals';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

        $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
        if (mysqli_connect_error()) {
            exit('Error connecting to the database' . mysqli_connect_errno());
        }
        $username = $_POST['a_username'];
        $password = $_POST['a_password'];


        if (empty($username)) {   //to check if username is empty
            echo 'username is required';
            exit();
        }
        if (empty($password)) {   //to check if password is empty
            echo 'password is required';
            exit();
        }

        $sql = "SELECT * from admintable WHERE a_username='$username'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $row = mysqli_num_rows($result);
            if ($row > 0) {
                $hash = mysqli_fetch_assoc($result);
                /*$verify = password_verify($password, $hash['a_password']);
                if ($verify == 1) {*/
                    session_start();
                    echo "<script>alert('Login Successfull');</script>";
                    $_SESSION['a_id'] = $hash['a_id'];
                    $_SESSION['a_username'] = $username;
                    $_SESSION['a_name'] = $hash['a_name'];
                    $_SESSION['a_email'] = $hash['a_email'];      //retrive firstname from users table
                    echo "<script>window.location.href='../adminpage/a_dashboard.php'</script>";
                //} 
                /*else {
                    echo "<script>alert('Enter Valid password');</script>";
                    echo "<script>window.location.href='admin_login.html'</script>";
                }*/
            } 
            else {
                echo "<script>alert('Enter Valid Username');</script>";
                echo "<script>window.location.href='admin_login.html'</script>";
            }
        } 
        else {
            echo 'Error occured';
            exit();
        }
    }
    ?> 
        
    