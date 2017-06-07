<?php
$server="localhost";
$username="karthik";
$password="mysqlroot";
$con=mysqli_connect($server,$username,$password);
if($con->connect_error)
{
	die("connection failed:".$con->connect_error);
}

$sql="drop database mydb";
if($con->query($sql)===true)
{
	echo "database dropped successfully";
}
else
{
	"error dropping database".$con->error;
}
$con->close();
?>