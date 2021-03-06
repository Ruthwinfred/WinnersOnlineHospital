<?php include('server.php') ;?>
<!DOCTYPE html>
<html lang="eng">
<!-- Head starts here -->
<head>
    <title>Winners Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Ruth Winfred"/>
        <!-- Description -->
        <meta name="description" content="My portforlio"/>
        <!-- Keywords -->
        <meta name="keyword" content="Html,css, JavaScript, Bootstrap, PHP, MySQL"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styless.css"/>
</head>
<!-- Head ends here -->
<body class="bodi">
<?php include('errors.php'); ?>
<div class="row">
    <div class="container">
<form method="post" action="register.php" id="contact">
<h3>Winners Online Hospital</h3>  
    <h4><i class="fa">&#xf234;</i>Patient registration</h4>
    <fieldset>
   <input type="text" name="fname" value="<?php echo $fname; ?>" placeholder="Enter your first name ....." title="Write here your first name">
</fieldset>
<fieldset>
    <input type="text" name="lname"  value="<?php echo $lname; ?>" placeholder="Enter your last name ....." title="Write here your second name">
<fieldset>
   <input type="text" name="uname"  value="<?php echo $uname; ?>" placeholder="Enter your username ....."title="Write the username you'll be using to log in">
</fieldset>
<fieldset>
   <input type="email" name="email"  value="<?php echo $email; ?>" placeholder="Enter your Email address ....." title="Write here your email">
</fieldset>
<fieldset>
    <input type="date" name="dob" value="<?php echo $dob; ?>" placeholder="Date of birth....." title="Enter your correct date of birth">
    </fieldset>
    <h id="g">Gender:</h> <input type="radio"  value="Male" name="gender"><h id="g">Male</h>
            <input type="radio"  value="Female" name="gender"><h id="g">Female</h>
            <input type="radio"  value="Other"  name="gender"><h id="g">Other</h>
    <fieldset>
<input type="password" name="pass" placeholder="Create a password ....." title="Create your password that you'll be using to log in">
</fieldset>
   <input type="password" name="cpass" placeholder="Confirm your password ....." title="Repeat the password you created up there">
</fieldset>
</fieldset>
<button type="submit" id="but" name="reg" title="Submit the form after filing all fields correctly">Register</button>
<fieldset>
   <h4> Already have an account? Then<a href="login.php" id="r"> login</a> instead.</h4>
</form>
</div>
</div>
</body>
</html>