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

        header("location: index.php");
    }

}
?>

<?php
    $title="Signup - Supreme Products";
    include('top.php');
    include('navigation.php');
?>

<div class="container-fluid py-5 bg-dark-grey">
    <div class="container">
        <div class="col-lg-6 m-auto bg-white py-5 shadow text-center">
            <h3>Signup To Supreme Products</h3>
            <div class="text-danger">
                        <?php
                        if(isset($_SESSION["error"])){
                            echo "
                              <div class='alert alert-danger alert-dismissible'>
                                <h4><i class='icon fa fa-warning'></i> Error!</h4>
                                ".$_SESSION["error"]."
                              </div>
                            ";
                            unset($_SESSION["error"]);
                          }       
                        ?>
                  </div>
            <form action="signup.php" method="POST" class="login-form mt-3">
                <input type="text" name="name" placeholder="Name" class="mt-3" required> <br>
                <input type="email" name="email" placeholder="Email" class="mt-3" required> <br>
                <input type="text" name="phone" placeholder="Phone Number" class="mt-3" required> <br>
                <input type="password" name="password" placeholder="Create Password" class="mt-3" required> <br>
                <input type="password" name="password_2" placeholder="Confirm Password" class="mt-3" required> <br>
                <input type="submit" name="signup" value="Signup" class="btn btn-lg text-center btn-success mt-3">
            </form>
        </div>
    </div>
</div>

<?php
    include('footer.php');
?>