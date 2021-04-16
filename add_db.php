<?php
include("includes/dbcon.php");

$a=$_POST['name'];
$b=$_POST['gender'];
$c=$_POST['email'];
$d=$_POST['mobile'];
$e=$_POST['password'];
$f=$_POST['cpassword'];
$g=$_POST['salary'];
$h=$_POST['dept'];

$q="insert into master_emp values(null,'$a','$b','$c','$d','$e','$f',$g,'$h')";
$r=mysql_query($q) or die("could not enter data...");
header("location:welcome.php?msg=Data Added Successfully...");
?>