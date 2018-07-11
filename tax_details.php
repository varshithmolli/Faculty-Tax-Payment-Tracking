<?php
//session_start();
//$facultyid=$_SESSION['facultyid'];
//global $id;
//$id=$_GET['id'];

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "faculty_tax";<?php
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
		echo "<h1 style='color:red';><center>Faculty Personal details</center></h1>";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$sql ="SELECT * from faculty_details where faculty_id=$id";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result))
		
	{


		echo "<h3 style='background-color:#4bffd4';>Faculty id:        ".$row["faculty_id"]."</h3>";
		echo "<h3 style='background-color:#ccccff';>Faculty name:      ".$row["faculty_name"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>mail id:           ".$row["mail"]."</h3>";
		echo "<h3 style='background-color:#ccccff';>Mobile number:     ".$row["mobile_number"]."</h3>";
		//echo "<h3 style='background-color:#4bffd4';>Aadhar number:     ".$row["aadhar"]."</h3>";
		echo "<h3 style='background-color:#ccccff';>PAN:               ".$row["PAN"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>Bank Account :     ".$row["Bank_Account_number"]."</h3>";
		echo "<h3 style='background-color:#ccccff';>Dno:               ".$row["Dno"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>street:            ".$row["street"]."</h3>";
		echo "<h3 style='background-color:#ccccff';>city:               ".$row["city"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>state:               ".$row["state"]."</h3>";
		echo "<h3  style='background-color:#ccccff';>pincode:               ".$row["pin_code"]."</h3>";

		
   }
}
			echo "<h1 style='color:red';><center>Faculty Salary details</center></h1>";

	$sql1 ="SELECT * from faculty_sal where faculty_id=$id";
	$result=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<h3 style='background-color:#4bffd4';>1.salary as per provision contained section 17(1):        ".$row["s1"]."</h3>";
		echo "<h3  style='background-color:#ccccff';>2.value of pre requists under section 17(2):      ".$row["s2"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>3.gross:(1+2)                                             ".$row["gross"]."</h3>";
		echo "<h3   style='background-color:#ccccff';>4.HRA:           ".$row["al1"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>5.Conveyance:     ".$row["al2"]."</h3>";
		echo "<h3  style='background-color:#ccccff';>6.balance(3-4-5):               ".$row["bal"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>7.Entratainment Allowance:               ".$row["ea"]."</h3>";
		echo "<h3  style='background-color:#ccccff';>8.Professional Tax :     ".$row["pt"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>9.Hl intrest:               ".$row["h1"]."</h3>";
		echo "<h3  style='background-color:#ccccff';>10.educational intrest:               ".$row["ed1"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>11.other income 1:               ".$row["o1"]."</h3>";
		echo "<h3  style='background-color:#ccccff';>12.other income 2:               ".$row["o2"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>13.other income 3:               ".$row["o3"]."</h3>";
		echo "<h3  style='background-color:#ccccff';>14.gross total income(6-7-8-9-10+11+12+13):               ".$row["gti"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>15.proficient fund:               ".$row["pf"]."</h3>";
		echo "<h3  style='background-color:#ccccff';>LIC(SSS):               ".$row["lic"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>children education:               ".$row["ce"]."</h3>";
		echo "<h3  style='background-color:#ccccff';>House loan principle:               ".$row["hlp"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>LIC Own:               ".$row["lico"]."</h3>";
		echo "<h3  style='background-color:#ccccff';>national insurance:               ".$row["ni"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>other investments:               ".$row["oi"]."</h3>";;
		echo "<h3  style='background-color:#ccccff';>Section U/S 80G:               ".$row["g"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>Section U/S 80D:               ".$row["d"]."</h3>";
		echo "<h3  style='background-color:#ccccff';>Section U/S 80DD:               ".$row["dd"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';>80c total amount:               ".$row["c"]."</h3>";
		echo "<h3  style='background-color:#ccccff';>DUA:               ".$row["dua"]."</h3>";
		echo "<h3 style='background-color:#4bffd4';><total income:               ".$row["ti"]."</h3>";
		echo "<h1 style='color:red'><center>tax payable:               ".$row["tax"]."</h3>";
		echo "<h2 style='color:red'><center>Tax deduction at source:    ".$row["tds"]."</h3>";

		
	}




}
?>

<?php		
/*		echo "<h3 style='background-color:#4bffd4';>Faculty id:        ".$row["faculty_id"]."</h3>";
		echo "<h3>Faculty name:      ".$row["faculty_name"];echo "</h3></centre>"; echo "</br>";
		echo "<h3>mail id:           ".$row["mail"];echo "</h3></centre>"; echo "</br>";
		echo "<h3>Mobile number:     ".$row["mobile_number"]; echo "</h3></centre>";echo "</br>";
		echo "<h3>Aadhar number:     ".$row["aadhar"]; echo "</h3></centre>";echo "</br>";
		echo "<h3>PAN:               ".$row["PAN"];echo "</h3></centre>"; echo "</br>";
		echo "<h3>Bank Account :     ".$row["Bank_Account_number"];echo "</h3></centre>"; echo "</br>";
		echo "<h3>Dno:               ".$row["Dno"];echo "</h3></centre>"; echo "</br>";
		echo "<h3>street:            ".$row["street"];echo "</h3></centre>"; echo "</br>";
		echo "<h3>city:               ".$row["city"];echo "</h3></centre>"; echo "</br>";
		echo "<h3>state:               ".$row["state"];echo "</h3></centre>"; echo "</br>";
		echo "<h3>pincode:               ".$row["pin_code"];echo "</h3></centre>"; echo "</br>";

		
		
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
*/
