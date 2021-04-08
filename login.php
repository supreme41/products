<?php
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
                <form action="" class="form-controll login-form text-center">
                    <input type="text" name="username" placeholder="Enter Username" id="" class="mt-4" required> <br>
                    <input type="password" name="username" placeholder="Enter Password" id="" class="mt-4" required> <br>
                    <input type="submit" value="login" class="btn btn-md login-btn mt-4"> <br>
                    <div class="p-2"></div>
                    <a href="" class="pt-3">Forgot Password?</a>
                </form>
                <div class="row mt-4">
                    <!-- <div class="col-lg-6 text-left col-6">
                        <a href="#" id="" style="margin-left: 15px">Signup</a>
                    </div> -->
                    <div class="col-lg-6 col-6 m-auto">
                        
                    </div>
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

<?php
    include('footer.php');
?>