<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "ecommerce";

$con = mysqli_connect($servername,$username,$password,$db_name);

if(!$con)
{
	echo"Unable to connect server <br>" . mysqli_connect_error();
}

date_default_timezone_set('Asia/Kolkata');

?>