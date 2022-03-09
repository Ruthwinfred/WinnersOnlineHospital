<?php 
session_start();
 if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: loginA.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: loginA.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styless.css">
</head>
<body>
	<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
     
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      
  	<?php endif ?>
	  
    <!-- logged in user information -->
	</div>
	<nav style="background-color: rgba(6, 20, 172, 0.755);">
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="float:right; margin-left:20px; margin-top:0px; background-color:rgba(22, 60, 215, 0.763); width:100%; color:white">Admin 
	<i class="fa">&#xf2be;</i><strong><?php echo $_SESSION['username']; ?></strong><a href="logoutA.php?id=logout" style="color: white; margin-left:850px" title="Leave the page">
	<i class="fa">&#xf08b;</i>Logout</a></p>
    <?php endif ?>
	</nav>

<center><div class="row" style="color:white"><div class="col-sm-12">WINNERS ONLINE HOSPITAL<hr></div></div>
<div class="row">
<div class="col-sm-4" style="background-color:rgba(22, 60, 215, 0.763);width:20%;margin-left:140px"><a href="ViewS.php?id=ViewS" style="color: white" title="Display registered details">View the sugestion box</a>&nbsp;&nbsp;</div>
<div class="col-sm-4"></div>
<div class="col-sm-4" style="background-color:rgba(22, 60, 215, 0.763);width:20%"><a href="ViewA.php?id=Appointment" style="color: white" title="Display registered details">View appointment requests</a>&nbsp;&nbsp;</div>
</div>
</center>	
	