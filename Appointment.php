<?php
	if (isset($_POST['cons'])) {
		$problem = $_POST['problem'];
 $hehi = $_POST['hehi'];
 $adds = $_POST['adds'];
 $aob = $_POST['aob'];




 //db credentials
$servername = 'localhost';
$dbusername = "root";
$dbpassword = "";
$dbname = "myhospital";

//connecting to the database
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

//checking errors
if ($conn->connect_error) {
	die("Connection error".$conn->connect_error);
}

//insert values into db
	$sql = "INSERT INTO patients(problem,hehi,adds,aob)
   VALUES('$problem','$hehi','$adds','$aob')";

	//execute the query
	if ($conn->query($sql) === TRUE) {
        echo  "<center><p style='margin-left:650px;margin-top:20px;color:skyblue;font-size:small'>Your request has been successfully submitted. Return to the <a href='index.php'>dashboard</a>
         to view the doctor's comment.
        <br>Thanks and stay safe!</p></center>";
	}else{
		echo "Failled to register";
	}

	$conn->close();
	}
?>


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
        <meta name="description" content="Myhospital"/>
        <!-- Keywords -->
        <meta name="keyword" content="Html,css, JavaScript, Bootstrap, PHP, MySQL"/>
        <link rel="stylesheet" href="styless.css"/>
</head>
<!-- Head ends here -->
<body class="bodi">




<div class="row">
    <div class="container">
<form method="post" action="" id="contact">
<div class="d">
    <h3>Appointment with Winners</h>
    <select name="problem" required>
        <option value="Marriege and counseling">Marriege counseling</option>
        <option value="Anger management">Anger management</option>
        <option value="Depression">Depression</option>
        <option value="Medication management">Medication management</option>
        <option value="Food allergy">Food allergy</option>
        <option value="Anorexiao">Anorexia</option>
    </select>
    <textarea name="hehi" placeholder="Briefly explain your health history here......." required></textarea>
    <textarea name="adds" placeholder="Have any habits or addictions?......." required></textarea>
    <textarea name="aob" placeholder="Have any other issue?......." required></textarea>
    <button type="submit" id="but" name="cons">Book appointment</button>
</form>
</div>
    </div>
    </div>
</body>
</html>
