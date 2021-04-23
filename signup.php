<?php 
    $title="Signup - Supreme Products";
    include('top.php');
    include('navigation.php');
?>

<div class="container-fluid py-5 bg-dark-grey">
    <div class="container">
        <div class="col-lg-6 m-auto bg-white py-5 shadow text-center">
            <h3>Signup To Supreme Products</h3>
            <p class="alert-danger" id="result"></p>
            <form method="POST" class="login-form mt-3">
                <input type="text" name="name" placeholder="Name" class="mt-3" id="name" required> <br>
                <input type="email" name="email" placeholder="Email" class="mt-3" id="email" required> <br>
                <input type="text" name="phone" placeholder="Phone Number" class="mt-3" id="phone" required> <br>
                <input type="password" name="password" placeholder="Create Password" id="pwd" class="mt-3" required> <br>
                <input type="password" name="password_2" placeholder="Confirm Password" id="c_pwd" class="mt-3" required> <br>
                <input type="submit" name="signup" value="Signup" class="btn btn-lg text-center btn-success mt-3">
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function (){
        $('form').submit(function (event){
            event.preventDefault()
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var pwd = document.getElementById('pwd').value;
            var c_pwd = document.getElementById('c_pwd').value;

            $.post('user_signup.php',{ name: name, email: email, phone: phone, pwd: pwd, c_pwd: c_pwd }, function(data){
                if(data == '1'){
                    // $(location).attr('href', 'index.php');
                    alert("User Registered Successfully")
                    history.go(-2);
                }
                else{
                    result.innerHTML = data;
                }
            })
        })
    })
</script>

<?php
    include('footer.php');
?>