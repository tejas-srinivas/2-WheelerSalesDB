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

        $username = $_POSt['username'];
        $password = $_POST['password'];


        if (empty($username)) {   //to check if username is empty
            echo 'username is required';
            exit();
        }
        if (empty($password)) {   //to check if password is empty
            echo 'password is required';
            exit();
        }

        $sql = "SELECT * from users WHERE username='$username'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $row = mysqli_num_rows($result);
            if ($row > 0) {
                $hash = mysqli_fetch_assoc($result);
                $verify = password_verify($password, $hash['password']);
                if ($verify == 1) {
                    session_start();
                    echo "<script>alert('Login Successfull');</script>";
                    $_SESSION['username'] = $hash['username'];
                    $_SESSION['first_name'] = $hash['first_name']; //retrive firstname from users table
                    $_SESSION['last_name'] = $hash['last_name'];   //retrive lastname from users table
                    $_SESSION['email'] = $hash['email']; 
                    echo "<script>window.location.href='../userpage/dashboard.php'</script>";
                } else {
                    echo "<script>alert('Enter Valid password');</script>";
                    echo "<script>window.location.href='login.html'</script>";
                }
            } else {
                echo "<script>alert('Enter Valid Username');</script>";
                echo "<script>window.location.href='login.html'</script>";
            }
        } else {
            echo 'Error occured';
            exit();
        }
    }
?> 
        
    