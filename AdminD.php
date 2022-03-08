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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styless.css">
</head>
<body><div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
     
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      
  	<?php endif ?>
	  
    <!-- logged in user information -->
	</div>
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="float:right; margin-right:10px; margin-top:0px; color:white">Welcome <i class="fa">&#xf2be;</i> <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>

<nav style="background-color: rgba(6, 20, 172, 0.755);">
<center>
<a href="ViewS.php?id=ViewS" style="color: white" title="Display registered details">View the sugestion box</a>&nbsp;&nbsp;|
<a href="ViewA.php?id=Appointment" style="color: white" title="Display registered details">View appointment requests</a>&nbsp;&nbsp;|
<a href="logoutA.php?id=logout" style="color: white" title="Leave the page">Logout</a>&nbsp;&nbsp;|
</nav>
	</center>	