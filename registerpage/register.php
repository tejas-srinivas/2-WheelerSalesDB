<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'wheels&deals';

        $con = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);
    
        if(mysqli_connect_error()) {
            exit('Error connecting to the database'.mysqli_connect_error());
        }

        if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {
            $u_no = rand(600,1200);
            $u_id = "UWD-".($u_no) ;
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

            $select = "SELECT * from users WHERE username='$username'";
            $result = mysqli_query($con,$select);
            if($result) {
                $num = mysqli_num_rows($result);
                if($num>0) {
                    echo "<script>alert('User already exists');</script>";
                }
                else {
                    $stmt= $con->prepare('INSERT INTO users(u_id,first_name,last_name,email,username,password) VALUES (?,?,?,?,?,?)');   //end-to-end password protection
                    $stmt->bind_param('ssssss',$u_id,$first_name,$last_name,$email,$username,$password);  //s=string ,i=integer
                    $stmt->execute(); //executes the function
                    if($stmt) {
                        echo "<script>alert('Registration Sucessfull !');</script>";
                        echo "<script>window.location.href='../loginpage/login.html'</script>";
                    }
                    else {
                        echo 'Error Occured inserting into records';
                    }
                }
            }
        }    
    }

?>