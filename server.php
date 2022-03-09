<?php
session_start();
// initializing variables
$fname = "";
$lname = "";
$uname = "";
$email = "";
$dob = "";
$gender = "";
$errors = array(); 


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'myhospital');

// REGISTER USER
if (isset($_POST['reg'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $uname = mysqli_real_escape_string($db, $_POST['uname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);
  $cpass = mysqli_real_escape_string($db, $_POST['cpass']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fname)) { array_push($errors, "First name is required"); }
  if (empty($lname)) { array_push($errors, "Last name is required"); }
  if (empty($uname)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($dob)) { array_push($errors, "Enter your date of birth"); }
  if (empty($gender)) { array_push($errors, "Chose your gender"); }
  if (empty($pass)) { array_push($errors, "Password is required"); }
  if ($pass != $cpass) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE uname='$uname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['uname'] === $uname) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$pass = md5($pass);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (fname, lname, uname, email,dob,gender, pass) 
  			  VALUES('$fname','$lname','$uname', '$email', '$dob', '$gender', '$pass')";
  	mysqli_query($db, $query);
  	$_SESSION['uname'] = $uname;
  	$_SESSION['success'] = "";
  	header('location: login.php');
  }
}
 

// LOG USER IN
if (isset($_POST['log'])) {
  // Get username and password from login form
  $uname = mysqli_real_escape_string($db, $_POST['uname']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);
  // validate form
  if (empty($uname)) array_push($errors, "Username or Email is required");
  if (empty($pass)) array_push($errors, "Password is required");

  // if no error in form, log user in
  if (count($errors) == 0) {
    $pass = md5($pass);
    $query = "SELECT * FROM users WHERE uname='$uname' AND pass='$pass'";
    $results = mysqli_query($db, $query);
  if (mysqli_num_rows($results) == 1) {
      $_SESSION['uname'] = $uname;
      $_SESSION['success'] = "";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong credentials");
    }
  }
}



// REGISTER ADMIN
if (isset($_POST['regi'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $pass1 = mysqli_real_escape_string($db, $_POST['pass1']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $pass1) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM admin WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO admin (username, password) 
  			  VALUES('$username', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "";
  	header('location: loginA.php');
  }
}
 


// LOG ADMIN IN
if (isset($_POST['ent'])) {
  // Get username and password from login form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  // validate form
  if (empty($username)) array_push($errors, "Username or Email is required");
  if (empty($password)) array_push($errors, "Password is required");

  // if no error in form, log user in
  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
  if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "";
      header('location: AdminD.php');
    }else {
      array_push($errors, "Wrong credentials");
    }
  }
}
?>