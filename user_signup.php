<?php
SESSION_START();
include('connection/connection.php');
if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pwd = $_POST['password'];
    $c_pwd = $_POST['password_2'];

    if($pwd != $c_pwd){
        $_SESSION['error'] = "Passwords does not match";
        header('Location: signup.php');
    }
    else{
        $pwd = password_hash($pwd,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (u_name, u_email, u_phone, u_pwd) VALUES ('$name', '$email', '$phone', '$pwd')";
        $result = mysqli_query($conn, $sql);

        header("location:javascript://history.go(-1)");
    }

}
?>