<?php
ob_start();
session_start();
$link=mysql_connect("localhost","root","") or die("could not connect to the server...");
mysql_select_db("emp") or die("could not select database from the server...");
?>