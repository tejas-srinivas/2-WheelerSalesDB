 <?php
            
                $DATABASE_HOST = 'localhost';
                $DATABASE_USER = 'root';
                $DATABASE_PASS = '';
                $DATABASE_NAME = 'registration_form';

                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

                $con = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);
                    if(mysqli_connect_error()) {
                        exit('Error connecting to the database'.mysqli_connect_errno());
                    }
                    
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        

                        if(empty($username)) {   //to check if username is empty
                            echo'username is required';
                            exit();
                        }
                        if(empty($password)) {   //to check if password is empty
                            echo'password is required';
                            exit();
                        }
            
                        $sql = "SELECT * from users WHERE username='$username'";
                        $result = mysqli_query($con,$sql);
                        if($result) {
                                $row = mysqli_num_rows($result);
                                if($row>0) {
                                    $hash = mysqli_fetch_assoc($result);
                                    $verify = password_verify($password,$hash['password']);
                                    if($verify == 1) {
                                        session_start();
                                        echo "<script>alert('Login Successfull');</script>";
                                        $_SESSION['username']=$username;
                                        echo "<script>window.location.href='dashboard.php'</script>";
                                    }
                                    else {
                                        echo "<script>alert('Enter correct password');</script>";
                                    }   
                                }
                                else {
                                    
                                    echo "<script>alert('Enter correct Username');</script>";
                                }
                        }
                        else {
                            echo'Error occured';
                            exit();
                        }       
                }
        ?> 
        
    