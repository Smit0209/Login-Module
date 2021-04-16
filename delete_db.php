<?php
include("includes/dbcon.php");


$eno=$_POST['mid'];

$q="delete from master_emp where eno=$eno";
$r=mysql_query($q) or die("could not enter data...".$q);
header("location:welcome.php");
?>