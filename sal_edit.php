
<!-- saved from url=(0035)file:///C:/wamp/www/taxpay/sal.html -->
<?php
global $id1;
session_start();
$id1=$_GET['id'];
$_SESSION['id']=$id1;
?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"></head><body>
<center><h1 style="color:red">FORM 16 </h1><br></center>
<form method="post" action="cal_edit.php"><center>
<table><tr bgcolor="#4bffd4"><td>1)Gross Salary</td></tr><tr bgcolor="#ccccff"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a)salary as per provisions contained section 17(1)</td><td><input type="text" name="gs1"/></td></tr><tr bgcolor="#4bffd4"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b)Value of perquisites under section 17(2)</td><td><input type="text" name="gs2"></td></tr>
<tr bgcolor="#ccccff"><td>2)Allowance</td></tr><tr bgcolor="#4bffd4"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a)HRA</td><td><input type="text" name="a1"/></td></tr><tr bgcolor="#ccccff"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b)Conveyance</td><td><input type="text" name="a2" /></td></tr>
<tr bgcolor="#4bffd4"><td>3)Deductions</td></tr><tr bgcolor="#ccccff"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a)Entertainment Allowance</td><td><input type="text" name="d1"/></td></tr><tr bgcolor="#4bffd4"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b)Profession tax </td><td><input type="text" name="d2"/></td></tr>
<tr bgcolor="#ccccff"><td>4)Income chargeable</td></tr><tr bgcolor="#4bffd4"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a)HL interest</td><td><input type="text" name="ic1"/></td></tr><tr bgcolor="#ccccff"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b)Edn loan interest</td><td><input type="text&quot;" name="ic2"/></td></tr>
<tr bgcolor="#4bffd4"><td>5)Any other income reported by employee section U/S 80D</td></tr><tr bgcolor="#ccccff"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) </td><td><input type="text" name="ad1"/></td></tr><tr bgcolor="#4bffd4"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b)</td><td><input type="text" name="ad2"/></td></tr><tr bgcolor="#ccccff"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c)</td><td><input type="text" name="ad3"/></td></tr>
<tr bgcolor="#4bffd4"><td>6)Deductions under 6-A section</td></tr><tr bgcolor="#ccccff"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a)Sec 80c</td></tr><tr bgcolor="#4bffd4"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i)Proficient fund</td><td><input type="text" name="dua1"/></td></tr><tr bgcolor="#ccccff"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ii)Lic(SSS)</td><td><input type="text" name="dua2"/></td></tr><tr bgcolor="#4bffd4"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iii)Children edn</td><td><input type="text" name="dua3"/></td></tr><tr bgcolor="#ccccff"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iv)House loan Principle</td><td><input type="text" name="dua4"/></td></tr><tr bgcolor="#4bffd4"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v)LIC own</td><td><input type="text" name="dua5"/></td></tr>
<tr bgcolor="#ccccff"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vi)National Insurance</td><td><input type="text" name="dua6"/></td></tr><tr bgcolor="#4bffd4"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vii)Other investments</td><td><input type="text" name="dua7"/></td></tr><tr bgcolor="#ccccff"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b)Other sections</td></tr><tr bgcolor="#4bffd4"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i)Section U/S 80G Flood relief Fund through Govt</td><td><input type="text" name="dub1"/></td></tr>
<tr bgcolor="#ccccff"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ii)Section U/S 80D medical</td><td><input type="text" name="dub2"/></td></tr><tr bgcolor="#4bffd4"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iii)Section U/s 80DD</td><td><input type="text" name="dub3"/></td></tr></table></center><center><input type="submit" value="SUBMIT"/></center></form> 
</body></html>