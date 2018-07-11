<?php
global $s1,$s2,$gross,$al1,$al2,$bal,$ea,$pt,$ic,$h1,$ed1,$o1,$o2,$o3,$gti,$pf,$lic,$ce,$hlp,$lico,$ni,$oi,$g,$d,$dd,$c,$cf,$dob,$age,$tax,$ti,$tds;
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "faculty_tax";
$id1=$_SESSION['id'];
//echo $id1;
//echo "</br>";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$s1=$_POST["gs1"];
$s2=$_POST["gs2"];
$gross=$s1+$s2;
$al1=$_POST["a1"];
$al2=$_POST["a2"];
$bal=$gross-$al1-$al2;
$ea=$_POST["d1"];
$pt=$_POST["d2"];
$ic=$bal-$ea-$pt;
$hl=$_POST["ic1"];
$edl=$_POST["ic2"];
$o1=$_POST["ad1"];
$o2=$_POST["ad2"];
$o3=$_POST["ad3"];
$gti=$ic-$hl-$edl+$o1+$o2+$o3;
$pf=$_POST["dua1"];
$lic=$_POST["dua2"];
$ce=$_POST["dua3"];
$hlp=$_POST["dua4"];
$lico=$_POST["dua5"];
$ni=$_POST["dua6"];
$oi=$_POST["dua7"];
$g=$_POST["dub1"];
$d=$_POST["dub2"];
$dd=$_POST["dub3"];
$c=$pf+$lic+$ce+$hlp+$lico+$ni+$oi;
if($c<150000)
{
	$cf=$c;
}
else
{
	$cf=150000;
}
$dua=$cf+$g+$d+$dd;
$ti=$gti-$dua;
	$sql ="SELECT dob from faculty_details where faculty_id=$id1;";
	$result=$conn->query($sql);
	if($result -> num_rows > 0){
	while($row=$result->fetch_assoc())
	{
		$dob= $row['dob'];
		
	}
}
$today=date("Y-m-d");
$diff=date_diff(date_create($dob),date_create($today));
$age= $diff->format('%y');
 //echo $age;

if($age<=60)
{
	if($ti<=250000)
	{
		$tax=0;
		//echo 0;
	}
	elseif ($ti<=500000) {
		$temp=$ti-250000;
		$tax=($temp*5)/100;
		//echo $tax;
	}
	elseif ($ti<=1000000) {
		$temp=$ti-500000;
		$tax=12500+(($temp*20)/100);
		//echo $tax;
	}
	else{
		$temp=$ti-1000000;
		$tax=112500+(($temp*30)/100);
		//echo $tax;
	}
}
elseif ($age<=80) {
	if($ti<=300000)
	{
		$tax=0;
		//echo 0;
	}
	elseif ($ti<=500000) {
		$temp=$ti-300000;
		$tax=($temp*10)/100;
		//echo $tax;
	}
	elseif ($ti<=1000000) {
		$temp=$ti-500000;
		$tax=20000+(($temp*20)/100);
		//echo $tax;
	}
	else{
		$temp=$ti-1000000;
		$tax=120000+(($temp*30)/100);
		//echo $tax;
	}
}
 else{
 	if($ti<=500000)
	{
		$tax=0;
		//echo 0;
	}
	elseif ($ti<=1000000) {
		$temp=$ti-500000;
		$tax=(($temp*20)/100);
		//echo $tax;
	}
	else{
		$temp=$ti-1000000;
		$tax=100000+(($temp*30)/100);
		//echo $tax;
	}
	
 }
 $tds=$tax/12;


$sql1 = "INSERT INTO faculty_sal(faculty_id,s1,s2,gross,al1,al2,bal,ea,pt,ic,h1,ed1,o1,o2,o3,gti,pf,lic,ce,hlp,lico,ni,oi,g,d,dd,c,dua,ti,tax,tds)
VALUES ('$id1','$s1','$s2','$gross','$al1','$al2','$bal','$ea','$pt','$ic','$hl','$edl','$o1','$o2','$o3','$gti','$pf','$lic','$ce','$hlp','$lico','$ni','$oi','$g','$d','$dd','$c','$dua','$ti','$tax','$tds')";
if ($conn->query($sql1)== TRUE) {
    header('Location:/tax_payg/final1.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

/*$sql =" SELECT * from faculty_details where faculty_id = $id1 ";
$result=$conn->query($sql);
if($result -> num_rows > 0){
	while($row=$result->fetch_assoc())
	{
		echo $row["dob"];
	}
}*/

?>

