<?php
    session_start();
    include('connection/connection.php');
         
        $uname = $_POST['uname'];
        $upass = $_POST['upass'];

        $sql = "SELECT * FROM users where u_email ='$uname'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);

            $set_pass = $row['u_pwd'];
            if (password_verify($upass, $set_pass)) {
                // Success!
                $name = $row['u_name'];
                $_SESSION['name'] = $name;
                echo 1;
            }
            else{
                $_SESSION['error'] = "Password Does not match the Email ID";
               header('Location: login.php');
            }
        }
        else{
            $_SESSION['error'] = "Email Id Does Not Exist Please Signup";
            header('Location: login.php');
        }
?>  


