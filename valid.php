<?php
$user=$_REQUEST['email'];
$pwd=$_REQUEST['pass'];
$hidden=$_REQUEST['hidden'];
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: no-store, must-revalidate");
$servername = "localhost";
$username = "root";
$password = "";
$dbname="faculty_details";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "select password,faculty_id from faculty_details where faculty_id='$user'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0)
 {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
    {
        $dbpwd=$row["password"];
	$id=$row["faculty_id"];
    }
 }
 else 
{
    echo "No Data found";
}

if($pwd==$dbpwd)
{
		session_start();
		$_SESSION['login-user']=$user;
		ini_set('session.use_strict_mode', 1);
		$_SESSION['id']=SID;
	if($hidden=='1'&& $dbaccess=='yes' )
	{
		header('Location:/fpts/admins/acadamics.php');
	}
	elseif($hidden=='1'&& $dbaccess=='no' )
	{
		?>
		<label style="font-variant: small-caps;font-size:30px;color:red">	<center>sorry access denied</center></label>
		<?php
		include ('login.html');
	}
	elseif($hidden=='2'&& $dbaccess=='no' )
	{
		header('Location:/fpts/student/student.php');
	}
	elseif($hidden=='2'&& $dbaccess=='yes' )
	{
		header('Location:/fpts/student/student.php');
	}
}
else 
{
?><label style="font-variant: small-caps;font-size:20px"><center>sorry user name or password is incorrect</center></label>
<?php
include ('login.html');
//header('Location:login.html');
}
mysqli_close($conn);
?>
