<?php
global $id,$pas;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "faculty_tax";

//echo $id1;
//echo "</br>";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id=$_POST['ID'];
$pas=$_POST['pass'];
//$result = mysql_query("SELECT * FROM abu");
$sql= "SELECT * FROM faculty_details where faculty_id='$id'"; 
//echo $result; 
	$result=$conn->query($sql);
	if($result -> num_rows > 0){
	while($row=$result->fetch_assoc())
	{
			$fid=$row['faculty_id'];
			$passw=$row['password'];
			if($fid == $id && $passw == $pas)
			{
				header("Location: tax_details.php?id=$id");
			}
			else if($passw!= $pas ||$fid != $id )
			{
			echo "failed";				
			}
	}
	}
	echo "no data found";

?>
