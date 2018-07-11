<?php
//session_start();
//$facultyid=$_SESSION['facultyid'];
global $id;
$id=$_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "faculty_tax";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
		echo "<h1><center>Faculty Personal details</center></h1>";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$sql ="SELECT * from faculty_details where faculty_id=$id";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<h3><centre>Faculty id:        ".$row["faculty_id"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>Faculty name:      ".$row["faculty_name"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>mail id:           ".$row["mail"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>Mobile number:     ".$row["mobile_number"]; echo "</h3></centre>";echo "</br>";
		//echo "<h3><centre>Aadhar number:     ".$row["aadhar"]; echo "</h3></centre>";echo "</br>";
		echo "<h3><centre>PAN:               ".$row["PAN"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>Bank Account :     ".$row["Bank_Account_number"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>Dno:               ".$row["Dno"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>street:            ".$row["street"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>city:               ".$row["city"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>state:               ".$row["state"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>pincode:               ".$row["pin_code"];echo "</h3></centre>"; echo "</br>";

		
	}
}
			echo "<h1><center>Faculty Salary details</center></h1>";

	$sql1 ="SELECT * from faculty_sal where faculty_id=$id";
	$result=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<h3><centre>1.salary as per provision contained section 17(1):        ".$row["s1"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>2.value of pre requists under section 17(2):      ".$row["s2"];echo "</h3></centre>";  echo "</br>";
		echo "<h3><centre>3.gross:(1+2)                                             ".$row["gross"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>4.HRA:           ".$row["al1"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>5.Conveyance:     ".$row["al2"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>6.balance(3-4-5):               ".$row["bal"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>7.Entratainment Allowance:               ".$row["ea"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>8.Professional Tax :     ".$row["pt"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>9.Hl intrest:               ".$row["h1"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>10.educational intrest:               ".$row["ed1"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>11.other income 1:               ".$row["o1"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>12.other income 2:               ".$row["o2"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>13.other income 3:               ".$row["o3"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>14.gross total income(6-7-8-9-10+11+12+13):               ".$row["gti"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>15.proficient fund:               ".$row["pf"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>LIC(SSS):               ".$row["lic"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>children education:               ".$row["ce"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>House loan principle:               ".$row["hlp"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>LIC Own:               ".$row["lico"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>national insurance:               ".$row["ni"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>other investments:               ".$row["oi"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>Section U/S 80G:               ".$row["g"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>Section U/S 80D:               ".$row["d"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>Section U/S 80DD:               ".$row["dd"]; echo "</h3></centre>";echo "</br>";
		echo "<h3><centre>80c total amount:               ".$row["c"]; echo "</h3></centre>";echo "</br>";
		echo "<h3><centre>DUA:               ".$row["dua"];echo "</h3></centre>"; echo "</br>";
		echo "<h3><centre>total income:               ".$row["ti"];echo "</h3></centre>"; echo "</br>";
		echo "<h1><center>tax payable:               ".$row["tax"];echo "</center></h1>"; echo "</br>";
		echo "<h2><center>Tax deduction at source:    ".$row["tds"];echo"</center></h2>";echo "</br>";

	}
	}
?>
