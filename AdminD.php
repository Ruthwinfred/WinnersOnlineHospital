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
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>
<nav style="background-color: rgba(6, 20, 172, 0.755);">
<center>
<a href="ViewS.php?id=ViewS" style="color: white" title="Display registered details">View the sugestion box</a>&nbsp;&nbsp;|
<a href="ViewA.php?id=Appointment" style="color: white" title="Display registered details">View appointment requests</a>&nbsp;&nbsp;|
<a href="logoutA.php?id=logout" style="color: white" title="Leave the page">Logout</a>&nbsp;&nbsp;|
<hr>
</nav>
	</center>	