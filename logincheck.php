<?php
include("includes/dbcon.php");

$c=$_POST['email'];

$e=$_POST['password'];

$q="select * from master_emp where email='$c' and password='$e'";
$r=mysql_query($q) or die("could not enter data...");
$c=mysql_num_rows($r);
echo $c;

if($c>=1)
{
$_SESSION['uname']=$c;
header("location:welcome.php?msg=Login Successfully...");
}
else
{
header("location:login.php?msg=Enter Proper Email and Password");
}

?>