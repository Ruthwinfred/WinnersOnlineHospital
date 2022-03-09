<?php
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

//select from the table
$sql = "SELECT * FROM patients";
$results = $conn->query($sql);

if ($results->num_rows > 0) {
    echo "<body style='background-color:#171515'><link rel='stylesheet' href='table.css'><table> 
    <a href='AdminD.php' style='color:white;text-decoration:none'>Dasboard</a><center style='color:white'>Patient appointment details<hr><br></center>
		  <tr>
		  <th>Id</th>
		  <th>Problem</th>
		  <th>Health History</th>
          <th>Addictions</th>
          <th>Any other business</th>
		  <th>Doctor's comment</th>
		  <th>Action</th> 
		  </tr>";
	while ($row = $results->fetch_assoc()) {
	echo "<tr>
		  <td>".$row['id']."</td>
		  <td>".$row['problem']."</td>
		  <td>".$row['hehi']."</td>
          <td>".$row['adds']."</td>
          <td>".$row['aob']."</td>
		  <td>".$row['com']."</td>
		  <td><a href='Comment.php?id=$row[id]'>Doctor's comment</a></td>
		  </tr>";
	}
	echo "</table>";

}
?>
