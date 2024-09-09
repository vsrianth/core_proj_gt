<?php 
require 'db_config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$date = date('Y-m-d H:i:s');

$status = mysqli_query($con,"update registration1 set name = '$name', mobile = '$mobile', email = '$email', updated_by = 1, updated_date = '$date' where reg_id = $id");

if($status)
{
	echo"<script>
	alert('Updated Successfully');
	<script>";
	header('Location:view_reg_data.php');
}
else
{
	echo "Update Fail";
}
?>

