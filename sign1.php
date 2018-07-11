<?php
global $id;
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
$id=$_POST["fid"];
$_SESSION['id']=$id;
$fname=$_POST["fna"];
$pass=$_POST["pass"];
$mail=$_POST["mail"];
$mob=$_POST["mob"];
//$aadhar=$_POST["aadhar"];
$pan=$_POST["pan"];
$ban=$_POST["ban"];
$dno=$_POST["dno"];
$str=$_POST["str"];
$area=$_POST["area"];
$city=$_POST["city"];
$sta=$_POST["sta"];
$pin=$_POST["pin"];
$dob=$_POST["dob"];
//echo "$dob";
//$dat= date("Y-m-d",$dob);
$sql = "INSERT INTO faculty_details (faculty_id, faculty_name, password,mail,mobile_number,PAN,Bank_Account_number,Dno,street,area,city,state,pin_code,dob)
VALUES ('$id', '$fname', '$pass','$mail','$mob','$pan','$ban','$dno','$str','$area','$city','$sta','$pin','$dob')";
if ($conn->query($sql)== TRUE) {
   header('Location:/tax_payg/sal.php');
    //  header('Location:/tax_payg/message.php?id='$id'');

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	
}

mysqli_close($conn);
?>