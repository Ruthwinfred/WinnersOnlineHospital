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
$sql = "SELECT * FROM sugbox";
$results = $conn->query($sql);

if ($results->num_rows > 0) {
    echo "<body style='background-color:#171515'><link rel='stylesheet' href='table.css'><table> 
    <a href='AdminD.php'>Dashboard</a><center style='color:white'>The sugestion box<hr><br></center>
		  <tr>
		  <th>Id</th>
		  <th>Name</th>
		  <th>Comment</th>
          <th>Email</th>
		  </tr>";
	while ($row = $results->fetch_assoc()) {
	echo "<tr>
		  <td>".$row['id']."</td>
		  <td>".$row['name']."</td>
		  <td>".$row['com']."</td>
          <td>".$row['email']."</td>
		  </tr>";
	}
	echo "</table>";

}
?>
