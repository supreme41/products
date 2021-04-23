<?php
session_start();
	include_once 'class.user.php';
	$user = new User();

	if (isset($_REQUEST['submit'])) {
		extract($_REQUEST);
	    $login = $user->check_login($emailusername, $password);
	    if ($login) {
	        // Registration Success
	       header("location:index.php");
	    } else {
	        // Registration Failed
	        echo 'Wrong username or password';
	    }
	}
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
            #container{width:400px; margin: 0 auto;}
			
/* Bordered form */
form {
  border: 5px solid #f1f1f1;
  margin-top:10%;
  width:100%;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
.login {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
.login:hover {
  opacity: 0.8;			
</style>

<script type="text/javascript" language="javascript">

            function submitlogin() {
                var form = document.login;
				if(form.emailusername.value == ""){
					alert( "Enter email or username." );
					return false;
				}
				else if(form.password.value == ""){
					alert( "Enter password." );
					return false;
				}
			}

</script>

<span style="font-family: 'Courier 10 Pitch', Courier, monospace; font-size: 13px; font-style: normal; line-height: 1.5;"><div id="container"></span>
<h1 style="margin-top:20%;text-decoration:underline;"> Admin Login Here</h1>
<form action="" method="post" name="login">
<table>
<tbody>
<tr>
<th>UserName or Email:</th>
<td><input type="text" name="emailusername" required="" /></td>
</tr>
<tr>
<th>Password:</th>
<td><input type="password" name="password" required="" /></td>
</tr>
<tr>
<td></td>
<td><input onclick="return(submitlogin());" type="submit" name="submit" value="Login" class="login"/></td>
</tr>
<tr>
<td></td>

</tr>
</tbody>
</table>
</form></div>

