<?php 
//if(session_status() == PHP_SESSION_ACTIVE){
	//a session is already running
	//session_destroy(); //stops the session
 // }
session_start();
 if (!isset($_SESSION['uname'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['uname']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styless.css">
</head>
<body>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <!-- <div class="error success" > -->
      	<!-- <h3> -->
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	<!-- </h3> -->
      <!-- </div> -->
  	<?php endif ?>

    <!-- logged in user information -->
    
</div>
<nav style="background-color: rgba(6, 20, 172, 0.755);">

<?php  if (isset($_SESSION['uname'])) : ?>
	<p style="float:right; margin-right:10px; margin-top:0px">Welcome <i class="fa">&#xf2be;</i><strong><?php echo $_SESSION['uname']; ?></strong></p>
    <?php endif ?>
	<center>
<a href="reply.php?id=reply" style="color: white" title="Display registered details">View the doctor's comment</a>&nbsp;&nbsp;|
<a href="Appointment.php?id=Appointment" style="color: white" title="Display registered details">Make an appointment request</a>&nbsp;&nbsp;|
<a href="logout.php?id=logout" style="color: white" title="Leave the page">Logout</a>&nbsp;&nbsp;|
<a href = "mailto: abc@example.com" title="Click here to communicate with us via email" style="color: white" >Email us</a>
</nav>
	</center>	
</body>
</html>