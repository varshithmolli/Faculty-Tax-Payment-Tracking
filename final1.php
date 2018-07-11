<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "faculty_tax";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$sql ="SELECT faculty_id from faculty_details;";
	$result=$conn->query($sql);
	if($result -> num_rows > 0){
echo"<center>";
echo"<table width=50% height=50% border=1>";	
echo"<tr><th>FACULTY ID</TH></TR>";
	while($row=$result->fetch_assoc())
	{
			$fid=$row['faculty_id'];
		?>
<html>
<body>
<?php
echo"<tr><td colspan=100><a href='tax_details.php?id=$fid'>$fid</a></td>
	<td><a href='sal_edit.php?id=$fid'>edit</td></tr>";
	}
}
	?>
	</table>
	</center>
</body>
</html>