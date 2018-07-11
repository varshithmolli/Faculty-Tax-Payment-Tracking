<?php
$id=$_POST['ID'];
$pas=$_POST['pass'];
if(($id=="admin") && ($pas=="admin"))
{
	header("Location: final1.php");
}
else
{
	echo "Invalid credentials";
}