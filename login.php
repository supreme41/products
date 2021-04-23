<?php
SESSION_START();
    $title="Login - Supreme Products";
    include('top.php');
    include('navigation.php');
?>

<div class="container-fluid py-5">
    <div class="container m-auto">
        <div class="row">
            <div class="col-lg-5 shadow py-5 bg-white">
                <h3 class="text-center">
                    Login To Supreme Products
                </h3>
                <p class="alert-danger" id="result"></p>
                <form action="user_login.php" method="POST" class="form-controll login-form text-center">
                    <input type="text" name="uname" placeholder="Enter Email Id" id="uname" class="mt-4" required> <br>
                    <input type="password" name="upass" placeholder="Enter Password" id="upass" class="mt-4" required> <br>
                    <input type="submit" value="login" class="btn btn-md login-btn mt-4"> <br>
                    <div class="p-2"></div>
                    <a href="" class="pt-3">Forgot Password?</a>
                </form>
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
            </div>
            <div class="col-lg-7 bg-dark-grey text-white shadow signup p-3">
                <div>
                    <h2 class="skinny-text pl-2">New to Supreme Products?</h2>
                    <p class="mt-2">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, 
                        voluptatum numquam impedit beatae dicta incidunt!
                    </p>
                    <a href="signup.php" class="btn">Signup</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script>
    $(document).ready(function (){
        $('form').submit(function (event){
            event.preventDefault()
            var uname = document.getElementById('uname');
            var upass = document.getElementById('upass');

            console.log('uname');

            $.post('user_login.php',{ uname: uname, upass: upass }, function(data){
                if(data == '1'){
                    // $(location).attr('href', 'index.php');
                    alert("Login Successfull")
                    history.go(-1);
                }
                else{
                    result.innerHTML = data;
                }
            })
        })
    })
</script> -->

<?php
    include('footer.php');
?>