<?php


$sname= "localhost";
$unmae= "abhishek";
$password = "";

$db_name = "dev";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
