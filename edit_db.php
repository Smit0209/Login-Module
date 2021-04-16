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
$eno=$_POST['eno'];

$q="update master_emp set ename='$a',gender='$b',email='$c',mobile='$d',password='$e',cpassword='$f',salary=$g,dept='$h' where eno=$eno";
$r=mysql_query($q) or die("could not enter data...".$q);
header("location:welcome.php");
?>