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
    echo "<link rel='stylesheet' href='table.css'><table> 
    <a href='AdminD.php'>Back</a><center>Patient appointment details<br></center>
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
		  <td>".$row['user_id']."</td>
		  <td>".$row['problem']."</td>
		  <td>".$row['hehi']."</td>
          <td>".$row['adds']."</td>
          <td>".$row['aob']."</td>
		  <td>".$row['com']."</td>
		  <td><a href='Comment.php?id=$row[user_id]'>Doctor's comment</a></td>
		  </tr>";
	}
	echo "</table>";

}
?>
