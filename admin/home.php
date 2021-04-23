<?php
session_start();
include_once 'class.user.php';
$user = new User(); $aid = $_SESSION['aid'];
if (!$user->get_session()){
 header("location:login.php");
}

if (isset($_GET['q'])){
 $user->user_logout();
 header("location:login.php");
 }
?>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

 <link  rel="stylesheet" media="all" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" /> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<title> SUPREME SOLAR </title>
 
 <nav class="navbar navbar-default" style="background-color:#1e3d68;">
  <div class="container-fluid">
    <div class="navbar-header">
      <img id="logo-main" src="image/logo.png" width="200" alt="Logo Thing main logo">
    </div>
      <ul class="nav navbar-nav" style="float:right;">
       <li style="color:white;font-size:18px;margin-right:10%;padding:10px;">Welcome <?php $user->get_fullname($aid); ?></li>
		<li ><a href="home.php?q=logout" class="btn btn-primary btn-lg" style="color:white;margin-top:10%;"> Logout </a></li>
	
     
    </ul>
  </div>
</nav>
 <div class="sidebar">
  <a  href="index.php">Add Products</a>
  <a href="view.php">View Products</a>
   <a href="#about">Update and Delete Products</a>
  <a href="update_price.php">Add and Update Price</a>
   
  <a href="#about">View Orders</a>
</div>
 
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin-top: -23px;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
 











