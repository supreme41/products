<?php
SESSION_START();
include('connection/connection.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pwd = $_POST['pwd'];
    $c_pwd = $_POST['c_pwd'];

    $check_sql = "SELECT * FROM users where u_email ='$email'";
    $check_result = mysqli_query($conn, $check_sql);

    $phone_sql = "SELECT * FROM users where u_phone ='$phone'";
    $phone_result = mysqli_query($conn, $phone_sql);

    // echo $name, $email;

    if(mysqli_num_rows($check_result) > 0){
        echo "The Email Id '".$email."' Already Exists";
    }

    elseif(mysqli_num_rows($phone_result) > 0){
        echo "The Phone Number '".$phone."' Already Exists";
    }

    elseif($pwd != $c_pwd){
        // $_SESSION['error'] = "Passwords does not match";
        // header('Location: signup.php');
        echo "Password Does not Match";
    }

    else{
        $pwd = password_hash($pwd,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (u_name, u_email, u_phone, u_pwd) VALUES ('$name', '$email', '$phone', '$pwd')";
        $result = mysqli_query($conn, $sql);

        echo 1;
    }

?>