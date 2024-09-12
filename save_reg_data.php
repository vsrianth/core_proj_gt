<?php
require 'db_config.php';

$date = date('Y-m-d H:i:s');

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];

	$status = mysqli_query($con,"insert into registration1(name,mobile,email,is_active,created_by,created_date) values ('$name','$mobile','$email',1,1,'$date')");
	if($status)
	{
		$msg = "Inserted Successfully";
	}
	else
	{
		$msg = "Insert Failed";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<script type="text/javascript">
	alert("<?php echo $msg; ?>")
</script>
</body>
</html>