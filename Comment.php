<?php
	if (isset($_GET['id'])) {
		$edit_id = $_GET['id'];
		include 'db.php';

		$sql = "SELECT * FROM patients WHERE id = '$edit_id'";
		$results = $conn->query($sql);

		if ($results->num_rows > 0) {
		while ($row = $results->fetch_assoc()) {
		$db_id = $row['id'];
        $db_problem = $row['problem'];
		}
	}
	// 
	}
?>
<hr>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Comments</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styless.css"/>
</head>
<body>

<div class="container">
<form method="post" id="contact">
	<fieldset>
	<input type="text" name="id" value="<?php echo $db_id; ?>" placeholder="User id">&nbsp;&nbsp;
</fieldset>
<fieldset>
    <input type="text" name="problem" value="<?php echo $db_problem; ?>"  placeholder="Problem">&nbsp;&nbsp;
</fieldset>
<fieldset>
    <input type="text" name="com" placeholder="Doctor's comment">&nbsp;&nbsp;
</fieldset>
<fieldset>
	<input type="submit" name="update" value="Update" id="but">
</fieldset>
</form>
</div>

<?php
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
        $problem = $_POST['problem'];
        $com = $_POST['com'];

		require_once 'db.php';

		$sql = "UPDATE patients SET problem='$problem', com='$com' WHERE id = '$id'";

		if ($conn->query($sql) === TRUE) {
			header('Location: ViewA.php');
		}else{
			echo "Failed to update".$conn->error;
		}
	}
?>
</body>
</html>