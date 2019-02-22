<?php
$con = mysqli_connect("localhost","root","","shop_db");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  echo 'test';
function runSQL($sql){
	global $con;
	$result=mysqli_query($con,$sql);
	return mysqli_fetch_all($result,MYSQLI_ASSOC);
}
