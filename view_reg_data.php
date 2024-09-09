<?php

require 'db_config.php';

$data = mysqli_query($con,"select * from registration1");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data View</title>
</head>
<body>
	<h2>Users Info Report</h2>
<table border="2" class="table">
	<thead>
		<th>Srno</th>
		<th>Name</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Status</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php $i = 1; while($d = mysqli_fetch_array($data)) { ?>
		<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $d["name"];?></td>
		<td><?php echo $d["mobile"];?></td>
		<td><?php echo $d["email"];?></td>
		<td><?php 
		if($d["is_active"] == 1)
		{
			echo"Acive";
		}
		else
		{
			echo"In-active";
		}
		?>
		</td>
		<td><button><a href="http://localhost/core_proj_gt/edit_reg_data.php/?id=<?php echo $d["reg_id"]; ?>">Edit</button></td>
		</tr>
	<?php $i++; } ?>
	</tbody>
</table>
</body>
</html>