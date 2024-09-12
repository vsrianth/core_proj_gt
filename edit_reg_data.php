<?php 
require 'db_config.php';

$id = $_GET['id'];

$data = mysqli_query($con,"select * from registration1 where reg_id = $id");


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>
</head>
<body>
	<h2>Edit User Data</h2>
<form method="post" action="http://localhost/core_proj_gt/update_reg_data.php">
	<?php while($d = mysqli_fetch_array($data)) { ?>
	<input type="hidden" name="id" value="<?php echo $d["reg_id"]; ?>">	
	Name : <input type="text" name="name" value="<?php echo $d["name"]; ?>"><br>
	Mobile : <input type="text" name="mobile" value="<?php echo $d["mobile"] ?>"><br>
	Email : <input type="text" name="email" value="<?php echo $d["email"]; ?>"><br>
	<input type="submit" name="submit">
<?php } ?>
</form>
</body>
</html>