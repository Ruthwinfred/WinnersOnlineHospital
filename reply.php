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
    <a href='index.php'>Back</a><center>Doctor's reply<br></center>
		  <tr>
		  <th>Id</th>
		  <th>Problem</th>
		  <th>Doctor's comment</th>
		  </tr>";
	while ($row = $results->fetch_assoc()) {
	echo "<tr>
		  <td>".$row['user_id']."</td>
		  <td>".$row['problem']."</td>
		  <td>".$row['com']."</td>
		  </tr>";
	}
	echo "</table>";

}
?>
